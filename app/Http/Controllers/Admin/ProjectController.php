<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all projects
        $projects = Project::all();

        return view('admin.project.project_list', [
            'projects' => $projects
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // get category list
        $categories = Project::CATEGORY;
        // create action
        $action = route('admin.project.store');

        return view('admin.project.project_detail', [
            'categories' => $categories,
            'action' => $action,
            'isedit' => false,
            'path' => Project::PATH
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
            'category' => 'required',
            'project_date' => 'required',
            'client' => 'required',
            'participants' => 'required',
            'goal' => 'required',
            'activity' => 'required',
        ]);

        // create project
        $project = new Project();
        $project->title = $request->title;
        $project->slug = Str::slug($request->title);
        $project->description = $request->description;
        $project->category = $request->category;
        $project->project_date = date('Y-m-d', strtotime($request->project_date));

        $project->client = $request->client;
        $project->participants = $request->participants;
        $project->goal = $request->goal;
        $project->activity = $request->activity;
        // jika status tidak di check maka status = 0
        if (!$request->status) {
            $project->status = 0;
        } else {
            $project->status = 1;
        }
        
        // upload image jika ada
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move(Project::PATH, $image_name);
            $project->image = $image_name;
        }

        $project->save();

        return redirect()->route('admin.project.index')->with('success', 'Project has been created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // get project by id
        $project = Project::findOrFail($id);
        // get category list
        $categories = Project::CATEGORY;
        // create action
        $action = route('admin.project.update', $id);

        return view('admin.project.project_detail', [
            'project' => $project,
            'categories' => $categories,
            'action' => $action,
            'isedit' => true,
            'path' => Project::PATH
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category' => 'required',
            'project_date' => 'required',
            'client' => 'required',
            'participants' => 'required',
            'goal' => 'required',
            'activity' => 'required',
        ]);

        // update project
        $project = Project::findOrFail($id);
        $project->title = $request->title;
        $project->slug = Str::slug($request->title);
        $project->description = $request->description;
        $project->category = $request->category;
        $project->project_date = date('Y-m-d', strtotime($request->project_date));
        

        // cek apakah ada image yang di upload
        if ($request->hasFile('image')) {
            // cek jika image sama dengan di database
            if($request->file('image')->getClientOriginalName() == $project->image) {
                $project->image = $request->file('image')->getClientOriginalName();
            } else {
                // jika ada maka hapus image yang lama
                if ($project->image && file_exists(Project::PATH . $project->image)) {
                    unlink(Project::PATH . $project->image);
                }
                // upload image yang baru
                $image = $request->file('image');
                $image_name = time() . '.' . $image->getClientOriginalExtension();
                $image->move(Project::PATH, $image_name);
                $project->image = $image_name;
            }
        }

        $project->client = $request->client;
        $project->participants = $request->participants;
        $project->goal = $request->goal;
        $project->activity = $request->activity;
        // jika status tidak di check maka status = 0
        if (!$request->status) {
            $project->status = 0;
        } else {
            $project->status = 1;
        }
        $project->save();

        return redirect()->route('admin.project.index')->with('success', 'Project has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete project
        $project = Project::findOrFail($id);
        // cek apakah ada image yang di upload
        if ($project->image && file_exists(Project::PATH . $project->image)) {
            unlink(Project::PATH . $project->image);
        }
        $project->delete();

        return redirect()->route('admin.project.index')->with('success', 'Project has been deleted successfully!');
    }
}
