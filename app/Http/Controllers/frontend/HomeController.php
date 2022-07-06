<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Service;
use App\Models\Site_infos;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function index()
    {
        $category = Category::where('status','1')->Limit('3')->get();
        $testimonial = Testimonial::where('status','1')->get();
        $contact = Site_infos::where('status','1')->first();
        $services=Service::where('status','1')->first();
        // dd($contact);
        return view('frontend.index',['cat'=> $category,'testi'=>$testimonial,'contact'=>$contact,'services'=>$services]);
    }
}
