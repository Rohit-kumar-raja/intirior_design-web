<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class ServicesController extends Controller
{
    public function index()
    {
       $category = Category::where('status','1')->get();
       return view('frontend.services',['cat'=>$category]); 
    }
}
