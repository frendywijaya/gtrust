<?php

namespace App\Http\Controllers;

use App\Models\BrandLogo;
use App\Models\StaticPage;
use App\Models\Team;
use App\Models\Testimoni;
use Illuminate\Http\Request;

class AboutController extends BaseController
{
    //
    public function index()
    {
        $staticAbout = StaticPage::getData('aboutstatic');
        $teams = Team::all();
        $testimonials = Testimoni::all();
        $brandLogos = BrandLogo::all();

        return view('frontend.tentang', [
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
