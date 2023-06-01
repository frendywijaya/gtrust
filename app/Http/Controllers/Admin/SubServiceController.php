<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SubService;
use Illuminate\Http\Request;

class SubServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'subtitle' => 'required',
            'image' => 'required',
            'description' => 'required',
            'category' => 'required',
        ]);

        // insert image
        $image = $request->file('image');
        // create filename unique untuk image
        $image_name = rand(1,100) . '-' . $image->getClientOriginalName();
        $image->move(SubService::PATH, $image_name);

        $subService_data = [
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'image' => $image_name,
            'description' => $request->description,
            'category' => $request->category,
        ];

        SubService::create($subService_data);

        return redirect()->back()->with('success', 'Sub Service has been added successfully!');
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
        //
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
        // validate
        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'description' => 'required',
            'category' => 'required',
        ]);

        // get data by id
        $subService = SubService::find($id);
        $subService->title = $request->title;
        $subService->subtitle = $request->subtitle;
        $subService->description = $request->description;
        $subService->category = $request->category;

        // cek apakah ada image yang di upload
        if ($request->hasFile('image')) {
            // cek jika image sama dengan di database
            if($request->file('image')->getClientOriginalName() == $subService->image) {
                $subService->image = $request->file('image')->getClientOriginalName();
            } else {
                // jika ada maka hapus image yang lama
                if ($subService->image && file_exists(SubService::PATH . $subService->image)) {
                    unlink(SubService::PATH . $subService->image);
                }
                // upload image yang baru
                $image = $request->file('image');
                $image_name = time() . '.' . $image->getClientOriginalExtension();
                $image->move(SubService::PATH, $image_name);
                $subService->image = $image_name;
            }
        }

        // save data
        $subService->save();

        return redirect()->back()->with('success', 'Sub Service has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete image jika ada
        $subService = SubService::find($id);
        if(file_exists(public_path(SubService::PATH . $subService->image)))
            unlink(public_path(SubService::PATH . $subService->image));

        // delete data
        $subService->delete();

        return redirect()->back()->with('success', 'Sub Service has been deleted successfully!');
    }
}
