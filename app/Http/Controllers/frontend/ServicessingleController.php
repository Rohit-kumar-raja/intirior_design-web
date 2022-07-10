<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Site_infos;
use Illuminate\Http\Request;

class ServicessingleController extends Controller
{
    public function index($slug)
    {
      $single_service=Service::where('status',1)->where('slug',$slug)->first();
      $services=Service::where('status',1)->orderByDesc('id')->take(20)->get();
      $info=Site_infos::where('status','1')->first();
       return view ('frontend.services_single',['data'=>$single_service,'info'=>$info,'services'=>$services]); 
    }
}
