<?php

namespace App\Http\Controllers;

use App\Models\SEO;
use App\Models\Team;
use App\Models\BrandLogo;
use App\Models\Testimoni;
use App\Models\StaticPage;
use Illuminate\Http\Request;

class AboutController extends BaseController
{
    //
    public function index()
    {
        // get data from table SEO
        $SEO = SEO::getData('about');
        $staticAbout = StaticPage::getData('aboutstatic');
        $teams = Team::all();
        $testimonials = Testimoni::all();
        $brandLogos = BrandLogo::all();

        return view('frontend.tentang', [
            'meta' => $SEO,
            'staticAbout' => $staticAbout,
            'teams' => $teams,
            'teamPath' => Team::PATH,
            'testimonials' => $testimonials,
            'testimoniPath' => Testimoni::PATH,
            'brandLogos' => $brandLogos,
            'brandLogoPath' => BrandLogo::PATH
        ]);
    }
}
