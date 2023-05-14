<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends BaseController
{
    //
    public function detail(){
        return view('frontend.project-detail');
    }

}
