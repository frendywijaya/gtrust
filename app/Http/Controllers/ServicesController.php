<?php

namespace App\Http\Controllers;

use App\Models\SEO;
use App\Models\Project;
use App\Models\BrandLogo;
use App\Models\StaticPage;
use App\Models\SubService;
use Illuminate\Http\Request;

class ServicesController extends BaseController
{
    //
    public function servicesFacilitation()
    {
        // get data from table SEO
        $SEO = SEO::getData('facilitation');
        $staticService = StaticPage::getData('servicefacilitation');
        // get sub service
        $subServices = SubService::where('category', 'facilitation')->get();
        // get project
        $projects = Project::where('category', 'facilitation')->get();
        // get brand
        $brandLogos = BrandLogo::all();

        return view('frontend.services', [
            'meta' => $SEO,
            'staticService' => $staticService,
            'subServices' => $subServices,
            'subServicePath' => SubService::PATH,
            'projects' => $projects,
            'projectPath' => Project::PATH,
            'brandLogos' => $brandLogos,
            'brandLogoPath' => BrandLogo::PATH
        ]);
    }

    //
    public function servicesLearning()
    {
        // get data from table SEO
        $SEO = SEO::getData('learning');
        $staticService = StaticPage::getData('servicelearning');
        // get sub service
        $subServices = SubService::where('category', 'learning')->get();
        // get project
        $projects = Project::where('category', 'learning')->get();
        // get brand
        $brandLogos = BrandLogo::all();

        return view('frontend.services', [
            'meta' => $SEO,
            'staticService' => $staticService,
            'subServices' => $subServices,
            'subServicePath' => SubService::PATH,
            'projects' => $projects,
            'projectPath' => Project::PATH,
            'brandLogos' => $brandLogos,
            'brandLogoPath' => BrandLogo::PATH
        ]);
    }
}
