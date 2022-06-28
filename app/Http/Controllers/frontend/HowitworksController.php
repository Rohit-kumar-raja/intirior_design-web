<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HowitworksController extends Controller
{
    public function index()
    {
        return view('frontend.how_it_works');
    }
}
