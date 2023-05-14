<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontakController extends BaseController
{
    //
    public function index()
    {
        return view('frontend.kontak');
    }
}
