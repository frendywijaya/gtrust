<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get blog list
        $blogs = Blog::all();

        $breadcrumbs = [
            ['name' => 'Blog'],
        ];

        return view('admin.blog.blog_list', [
            'blogs' => $blogs,
            'breadcrumbs' => $breadcrumbs,
            'title' => 'Blog List'
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
        $categories = Category::all();
        // create action
        $action = route('admin.blog.store');

        $breadcrumbs = [
            ['name' => 'Blog', 'url' => route('admin.blog.index')],
            ['name' => 'Create Blog'],
        ];

        return view('admin.blog.blog_detail', [
            'categories' => $categories,
            'action' => $action,
            'isedit' => false,
            'path' => Blog::PATH,
            'breadcrumbs' => $breadcrumbs,
            'title' => 'Create Blog'
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
            'writer' => 'required',
            'category_id' => 'required',
            // required date format
            'date' => 'required',
        ]);

        // create blog
        $blog = new Blog();
        $blog->title = $request->title;
        // create slug from title
        $blog->slug = Str::slug($request->title);
        $blog->description = $request->description;

        // save image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . "." . $image->getClientOriginalExtension();
            $destination = Blog::PATH;
            $image->move($destination, $image_name);
            $blog->image = $image_name;
        }

        $blog->writer = $request->writer;
        $blog->category_id = $request->category_id;
        // jika status tidak di check maka status = 0
        if (!$request->status) {
            $blog->status = 0;
        } else {
            $blog->status = 1;
        }
        $blog->date = date('Y-m-d', strtotime($request->date));
        $blog->save();

        // redirect to blog list
        return redirect()->route('admin.blog.index')->with('success', 'Blog created successfully.');
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
        // get blog by id
        $blog = Blog::find($id);
        // get category list
        $categories = Category::all();
        // update action
        $action = route('admin.blog.update', $id);

        $breadcrumbs = [
            ['name' => 'Blog', 'url' => route('admin.blog.index')],
            ['name' => 'Edit Blog'],
        ];

        return view('admin.blog.blog_detail', [
            'blog' => $blog,
            'categories' => $categories,
            'action' => $action,
            'isedit' => true,
            'path' => Blog::PATH,
            'breadcrumbs' => $breadcrumbs,
            'title' => 'Edit Blog'
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
            'writer' => 'required',
            'category_id' => 'required',
            'date' => 'required',
        ]);

        // update blog
        $blog = Blog::find($id);
        $blog->title = $request->title;
        // create slug from title
        $blog->slug = Str::slug($request->title);
        $blog->description = $request->description;
        // cek memilik image
        if ($request->hasFile('image')) {
            if ($request->image == $blog->image) {
                // cek apakah image lama ada
                if ($blog->image) {
                    unlink(public_path(Blog::PATH . $blog->image));
                }
            }

            $image = $request->file('image');
            $image_name = time() . "." . $image->getClientOriginalExtension();
            $destination = Blog::PATH;
            $image->move($destination, $image_name);
            $blog->image = $image_name;
        }

        $blog->writer = $request->writer;
        $blog->category_id = $request->category_id;
        // jika status tidak di check maka status = 0
        if (!$request->status) {
            $blog->status = 0;
        } else {
            $blog->status = 1;
        }
        $blog->date = date('Y-m-d', strtotime($request->date));
        $blog->save();

        // redirect to blog list
        return redirect()->route('admin.blog.index')->with('success', 'Blog updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete blog
        $blog = Blog::find($id);

        // delete image jika ada
        if (file_exists(public_path(Blog::PATH . $blog->image)))
            unlink(public_path(Blog::PATH . $blog->image));

        $blog->delete();

        // redirect to blog list

        return redirect()->route('admin.blog.index')->with('success', 'Blog deleted successfully.');
    }
}
