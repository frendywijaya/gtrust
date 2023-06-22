<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BrandLogo;
use Illuminate\Http\Request;

class BrandLogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get data from table brand_logos
        $brandLogos = BrandLogo::all();

        $breadcrumbs = [
            ['name' => 'Global Section'],
            ['name' => 'Brand Logo'],
        ];

        return view('admin.brand.brand' , [
            'brandLogos' => $brandLogos,
            'breadcrumbs' => $breadcrumbs,
            'title' => 'Brand Logo'
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
        $request->validate([
            'title' => 'required',
            'image' => 'required',
        ]);

        // insert image
        $image = $request->file('image');

        // create filename unique untuk image
        $image_name = rand(1,100) . '-' . $image->getClientOriginalName();

        $image->move('uploads/brand-logo/', $image_name);

        $brandLogo_data = [
            'title' => $request->title,
            'image' => $image_name,
        ];

        BrandLogo::create($brandLogo_data);

        return redirect()->back()->with('success', 'Data created successfully.');
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
        // update data
        $request->validate([
            'title' => 'required',
            'image' => 'required',
        ]);

        $brandLogo = BrandLogo::find($id);
        // cek jika image sama dengan di database
        if ($request->file('image')->getClientOriginalName() == $brandLogo->image) {
            $image_name = $brandLogo->image;
        } else {
            if (file_exists(public_path('uploads/brand-logo/' . $brandLogo->image))) {
                unlink(public_path('uploads/brand-logo/' . $brandLogo->image));
            }
            // insert image
            $image = $request->file('image');
            // create filename unique untuk image
            $image_name = rand(1,100) . '-' . $image->getClientOriginalName();
            $image->move('uploads/brand-logo/', $image_name);
        }

        $brandLogo_data = [
            'title' => $request->title,
            'image' => $image_name,
        ];

        BrandLogo::whereId($id)->update($brandLogo_data);

        return redirect()->back()->with('success', 'Data updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete image jika ada
        $brandLogo = BrandLogo::find($id);
        if (file_exists(public_path('uploads/brand-logo/' . $brandLogo->image)))
            unlink(public_path('uploads/brand-logo/' . $brandLogo->image));

        BrandLogo::whereId($id)->delete();

        return redirect()->back()->with('success', 'Data deleted successfully.');
    }
}
