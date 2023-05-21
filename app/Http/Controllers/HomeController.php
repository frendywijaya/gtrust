<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BrandLogo;
use App\Models\Project;
use App\Models\Slider;
use App\Models\StaticPage;
use Illuminate\Http\Request;

class HomeController extends BaseController
{

    public function index()
    {
        // get data from table brand_logos
        $brandLogos = BrandLogo::all();
        // get all slider
        $sliders = Slider::all();
        // get static page aboutstatic
        $staticAbout = StaticPage::getData('homestatic');
        // get project limit 5
        $projects = Project::limit(5)->get();
        // get blog limit 5
        $blogs = Blog::limit(5)->get();

        return view('frontend.index' , [
            'brandLogos' => $brandLogos,
            'sliders' => $sliders,
            'pathSlider' => Slider::PATH,
            'staticHome' => $staticAbout,
            'projects' => $projects,
            'blogs' => $blogs,
            'pathProject' => Project::PATH,
            'pathBlog' => Blog::PATH
        ]);
    }
}
