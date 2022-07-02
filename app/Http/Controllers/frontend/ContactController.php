<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contactus;
use App\Models\Site_infos;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Site_infos::where('status','1')->first();
        return view('frontend.contact',['contact'=>$contact]);
    }
}

