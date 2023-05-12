<?php

namespace App\Http\Controllers;

use App\Models\StaticPage;
use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    /**
     * Save data to static_page table
     * @string $section
     * @array $data
     * @return redirect
     */
    public function save(Request $request, $section)
    {
        // get data from request _POST
        $data = $request->except('_token', '_method');

        // get data from static_page table
        $static_page = StaticPage::where('section', $section)->first();
        if (!empty($static_page)) {
            $static_page = json_decode($static_page->data,true);
        } else {
            $static_page = [];
        }

        // loop data to array
        foreach ($data as $key => $value) {
            // cek isfile
            if ($request->hasFile($key)) {
                // cek if file is exist on database
                if (array_key_exists($key, $static_page)) {
                    // create name file with section name
                    $file_name = $section . '-' . $static_page[$key];
                    // cek if file is exist
                    if (file_exists('images/staticpage/' . $file_name)) {
                        // delete file
                        unlink('images/staticpage/' . $file_name);
                    }
                }
                // upload file
                $file = $request->file($key);
                $file->move('images/staticpage', $section . '-' . $file->getClientOriginalName());
                $data[$key] = $file->getClientOriginalName();
            }
        }

        // parse data to json
        $data = json_encode($data);

        // cek if section is exist
        $cek = StaticPage::where('section', $section)->first();
        if (!empty($cek)) {
            // update data
            $cek->data = $data;
            $cek->save();
        } else {
            // create new data
            $static_page = new StaticPage();
            $static_page->section = $section;
            $static_page->data = $data;
            $static_page->save();
        }

        return redirect()->back()->with('success', 'Static Page berhasil ditambahkan');
    }
}
