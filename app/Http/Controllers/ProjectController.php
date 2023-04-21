<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //
    public function detail(){
        return view('frontend.project-detail');
    }

}
