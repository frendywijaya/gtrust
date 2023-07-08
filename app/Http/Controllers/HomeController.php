<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BrandLogo;
use App\Models\BulletPoint;
use App\Models\Project;
use App\Models\Slider;
use App\Models\StaticPage;
use App\Models\SEO;
use Illuminate\Http\Request;

class HomeController extends BaseController
{

    public function index()
    {
        // get data from table SEO
        $SEO = SEO::getData('home');
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
        // get bullet points
        $bulletPoints = BulletPoint::all();

        return view('frontend.index' , [
            'meta' => $SEO,
            'brandLogos' => $brandLogos,
            'brandLogoPath' => BrandLogo::PATH,
            'sliders' => $sliders,
            'pathSlider' => Slider::PATH,
            'staticHome' => $staticAbout,
            'projects' => $projects,
            'blogs' => $blogs,
            'pathProject' => Project::PATH,
            'pathBlog' => Blog::PATH,
            'bullets' => $bulletPoints,
            'pathBullet' => BulletPoint::PATH,
        ]);
    }
}
