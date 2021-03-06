<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Service;

class ServicesController extends Controller
{
    public function index()
    {
       $category = Category::where('status','1')->get();
       $service=Service::where('status','1')->paginate(20);
       return view('frontend.services',['cat'=>$category,'services'=>$service]); 
    }
    public function indexByCategory($id)
    {
       $category = Category::where('status','1')->get();
       $service=Service::where('status','1')->where('category',$id)->paginate(20);
       return view('frontend.services',['cat'=>$category,'services'=>$service,'cateigory_id'=>$id]); 
    }
}
