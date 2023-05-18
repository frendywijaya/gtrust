<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends BaseController
{
    //
    public function index()
    {
        // get blog list
        $blogs = Blog::all();
        // get category list
        $categories = Category::all();

        return view('frontend.blog' , [
            'blogs' => $blogs,
            'path' => Blog::PATH,
            'categories' => $categories
        ]);
    }

    public function detail($slug)
    {
        // get blog by slug
        $blog = Blog::where('slug', $slug)->first();
        // get category list
        $categories = Category::all();

        // get recent blog by category
        $recentBlogs = Blog::where('category_id', $blog->category_id)->where('id', '!=', $blog->id)->get();

        return view('frontend.blog-detail', [
            'blog' => $blog,
            'path' => Blog::PATH,
            'categories' => $categories,
            'recentBlogs' => $recentBlogs
        ]);
    }
}
