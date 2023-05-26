<?php

namespace App\Http\Controllers;

use App\Models\BrandLogo;
use App\Models\Project;
use App\Models\StaticPage;
use App\Models\SubService;
use Illuminate\Http\Request;

class ServicesController extends BaseController
{
    //
    public function servicesFacilitation()
    {
        $staticService = StaticPage::getData('servicefacilitation');
        // get sub service
        $subServices = SubService::where('category', 'facilitation')->get();
        // get project 
        $projects = Project::where('category', 'facilitation')->get();
        // get brand
        $brandLogos = BrandLogo::all();
        
        return view('frontend.services', [
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
        $staticService = StaticPage::getData('servicelearning');
        // get sub service
        $subServices = SubService::where('category', 'learning')->get();
        // get project 
        $projects = Project::where('category', 'learning')->get();
        // get brand
        $brandLogos = BrandLogo::all();
        
        return view('frontend.services', [
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
