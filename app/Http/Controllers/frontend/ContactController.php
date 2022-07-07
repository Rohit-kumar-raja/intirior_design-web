<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contactus;
use App\Models\Site_infos;
use Exception;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Site_infos::where('status', '1')->first();
        return view('frontend.contact', ['contact' => $contact]);
    }
    public function contact(Request $request)
    {

        try {
            Contactus::insertGetId($request->except(['_token']));
            return redirect()->back()->with('success', 'Your Request Successfully sent we are connect you soon');
        } catch (Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());
        }
    }
}
