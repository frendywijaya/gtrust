<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends BaseController
{
    //
    protected function index(){
        return view('admin.dashboard');
    }
}
