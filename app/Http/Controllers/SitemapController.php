<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Blog;
use App\Models\StaticPage;
use Illuminate\Http\Request;

class SitemapController extends BaseController
{
    //
    public function index() {
        // get detail project by slug
        $projects = Project::all();
        $blogs = Blog::all();
        $homestatic = StaticPage::all()->where('id',2)->toArray();
        $aboutstatic = StaticPage::all()->where('id',5)->toArray();

        // dd($homestatic);

        // return response()->view('sitemap', ['projects'=> $projects, 'blogs'=> $blogs, 'homestatic' => $homestatic,])->header('Content-Type','text/xml');
        return response()->view('sitemap', compact('projects','blogs','homestatic','aboutstatic'))->header('Content-Type','text/xml');



        // return view('frontend.project-detail', [
        //     'project' => $project,
        //     'path' => Project::PATH
        // ]);
    }

}
