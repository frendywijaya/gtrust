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
        $blogs = Blog::paginate(10);
        // get category list
        $categories = Category::all();

        return view('frontend.blog' , [
            'blogs' => $blogs,
            'path' => Blog::PATH,
            'isSearch' => false,
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

        // create link facebook share
        $facebookShareLink = 'https://www.facebook.com/sharer/sharer.php?u=' . url()->current();
        // create link twitter share
        $twitterShareLink = 'https://twitter.com/intent/tweet?url=' . url()->current() . '&text=' . $blog->title;
        // create link linkedin share
        $linkedinShareLink = 'https://www.linkedin.com/shareArticle?mini=true&url=' . url()->current() . '&title=' . $blog->title;

        return view('frontend.blog-detail', [
            'blog' => $blog,
            'path' => Blog::PATH,
            'categories' => $categories,
            'recentBlogs' => $recentBlogs,
            'isSearch' => false,
            'link' => [
                'facebook' => $facebookShareLink,
                'twitter' => $twitterShareLink,
                'linkedin' => $linkedinShareLink,
            ]
        ]);
    }

    // search blog
    public function search(Request $request)
    {
        $searchTerm = $request->input('q');
        $category = $request->input('category');

        $query = Blog::query();

        if (!empty($searchTerm)) {
            $query->where(function ($q) use ($searchTerm) {
                $q->where('title', 'LIKE', '%' . $searchTerm . '%');
            });
        }

        if (!empty($category)) {
            $query->where('category_id', $category);
        }
    
        $blogs = $query->get();
        
        if (!empty($searchTerm)) {
             // filter category from result blog
            $categories = Category::all()->filter(function ($category) use ($blogs) {
                return $blogs->contains('category_id', $category->id);
            });
        } else {
            $categories = Category::all();
        }

        return view('frontend.blog' , [
            'blogs' => $blogs,
            'path' => Blog::PATH,
            'categories' => $categories,
            'isSearch' => true,
        ]);
    }
}
