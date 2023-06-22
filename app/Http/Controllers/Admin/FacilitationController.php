<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StaticPage;
use App\Models\SubService;
use Illuminate\Http\Request;

class FacilitationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get data from static_page table
        $staticFacilitation = StaticPage::getData('servicefacilitation');

        $breadcrumbs = [
            ['name' => 'Main Services'],
            ['name' => 'Facilitation'],
        ];

        // get subServiceLists where
        $subServiceLists = SubService::where('category', 'facilitation')->get();
        return view('admin.services.facilitation', [
            'staticPage' => $staticFacilitation,
            'subServiceLists' => $subServiceLists,
            'path' => SubService::PATH,
            'breadcrumbs' => $breadcrumbs,
            'title' => 'Facilitation Page CMS'

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
