<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends BaseController
{
    //
    public function index()
    {
        return view('frontend.services');
    }
}
