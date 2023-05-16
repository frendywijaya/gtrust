<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
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
        return view('admin.blog.blog_list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.blog_detail');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'description' => 'required',
            'image' => 'required',
            'writer' => 'required',
            'category_id' => 'required',
            'status' => 'required',
            'date' => 'required',
        ]);

        // create blog
        $blog = new Blog();
        $blog->title = $request->title;
        // create slug from title
        $blog->slug = Str::slug($request->title);
        $blog->description = $request->description;

        // save image
        if($request->hasFile('image')){
            $image = $request->file('image');
            $image_name = time().".".$image->getClientOriginalExtension();
            $destination = Blog::PATH;
            $image->move($destination, $image_name);
            $blog->image = $image_name;
        }

        $blog->writer = $request->writer;
        $blog->category_id = $request->category_id;
        $blog->status = $request->status;
        $blog->date = $request->date;
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

        return view('admin.blog.blog_detail', compact('blog'));
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
            'slug' => 'required',
            'description' => 'required',
            'image' => 'required',
            'writer' => 'required',
            'category_id' => 'required',
            'status' => 'required',
            'date' => 'required',
        ]);

        // update blog

        $blog = Blog::find($id);
        $blog->title = $request->title;
        // create slug from title
        $blog->slug = Str::slug($request->title);
        $blog->description = $request->description;

        // cek memilik image
        if($request->hasFile('image')){
            // cek apakah image lama ada
            if($blog->image){
                unlink(public_path(Blog::PATH.$blog->image));
            }
            $image = $request->file('image');
            $image_name = time().".".$image->getClientOriginalExtension();
            $destination = Blog::PATH;
            $image->move($destination, $image_name);
            $blog->image = $image_name;
        }

        $blog->writer = $request->writer;
        $blog->category_id = $request->category_id;
        $blog->status = $request->status;
        $blog->date = $request->date;
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
        unlink(public_path(Blog::PATH . $blog->image));

        $blog->delete();

        // redirect to blog list

        return redirect()->route('admin.blog.index')->with('success', 'Blog deleted successfully.');

    }

    public function category()
    {
        return view('admin.blog.blog_category');
    }
}
