<?php

namespace App\Http\Controllers;

use App\Models\BrandLogo;
use App\Models\StaticPage;
use Illuminate\Http\Request;

class HomeController extends BaseController
{

    public function index()
    {
        // get data from table brand_logos
        $brandLogos = BrandLogo::all();

        return view('frontend.index' , [
            'brandLogos' => $brandLogos,
        ]);
    }
}
