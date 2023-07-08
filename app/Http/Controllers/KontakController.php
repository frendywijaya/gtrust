<?php

namespace App\Http\Controllers;

use App\Models\SEO;
use App\Models\Inbox;
use App\Models\StaticPage;
use Illuminate\Http\Request;

class KontakController extends BaseController
{
    //
    public function index()
    {
        // get data from table SEO
        $SEO = SEO::getData('home');
        // get static page
        $staticKontak = StaticPage::getData('contactstatic');

        return view('frontend.kontak', [
            'meta' => $SEO,
            'staticKontak' => $staticKontak
        ]);
    }

    // craete function send massage
    public function storeMassage(Request $request)
    {
        // create validation
        $request->validate([
            'full_name' => 'required',
            'company_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);

        // store data to table inboxes
        Inbox::create([
            'full_name' => $request->full_name,
            'company_name' => $request->company_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        // redirect back with success message
        return redirect()->route('kontak')->with('success', 'Static Page berhasil ditambahkan');
    }

}
