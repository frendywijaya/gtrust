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

    public function detail()
    {
        return view('frontend.blog-detail');
    }
}
