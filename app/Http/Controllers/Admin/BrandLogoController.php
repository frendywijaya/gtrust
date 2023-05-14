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

        return view('admin.brand.brand' , [
            'brandLogos' => $brandLogos,
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
        //

        // update data
        $request->validate([
            'title' => 'required',
            'image' => 'required',
        ]);

        // cek jika memilih gambar baru maka gambar lama akan dihapus
        if ($request->image) {
            $brandLogo = BrandLogo::find($id);
            unlink(public_path('uploads/brand-logo/' . $brandLogo->image));
        }

        // insert new image jika ada
        if ($request->image) {
            $image = $request->file('image');

            // create filename unique untuk image
            $image_name = rand(3) . '-' . $image->getClientOriginalName();
            $image->move('uploads/brand-logo/', $image_name);
            $brandLogo_data = [
                'title' => $request->title,
                'image' => $image_name,
            ];
        } else {
            $brandLogo_data = [
                'title' => $request->title,
            ];
        }

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
        unlink(public_path('uploads/brand-logo/' . $brandLogo->image));

        BrandLogo::whereId($id)->delete();

        return redirect()->back()->with('success', 'Data deleted successfully.');
    }
}
