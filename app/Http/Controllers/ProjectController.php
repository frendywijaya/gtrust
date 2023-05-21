<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends BaseController
{
    //
    public function detail($slug){
        // get detail project by slug
        $project = Project::where('slug', $slug)->first();
        
        return view('frontend.project-detail', [
            'project' => $project,
            'path' => Project::PATH
        ]);
    }

}
