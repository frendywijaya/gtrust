<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get data from table categories
        $categories = Category::all();

        $breadcrumbs = [
            ['name' => 'Blog Category'],
        ];

        return view('admin.blog.blog_category', [
            'categories' => $categories,
            'breadcrumbs' => $breadcrumbs,
            'title' => 'Blog Category'
        ]);
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
        //
        $request->validate([
            'title' => 'required'
        ]);

        // create category
        $category = new Category();
        $category->title = $request->title;
        $category->save();

        return redirect()->back()->with('success', 'Category has been added successfully!');
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
        // update category
        $request->validate([
            'title' => 'required'
        ]);

        // update category
        $category = Category::find($id);
        $category->title = $request->title;
        $category->save();

        return redirect()->back()->with('success', 'Category has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // hapus category
        $category = Category::find($id);
        $category->delete();

        return redirect()->back()->with('success', 'Category has been deleted successfully!');
    }
}
