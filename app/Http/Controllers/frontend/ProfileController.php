<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\AllUsers;
use App\Models\Messages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
     
       $user = AllUsers::where('status','1')->where('id', Auth::user()->id)->first();
       $service_taken=Messages::where('user_id',$user->id)->get();
       return view('frontend.profile2',['users'=>$user,'takens'=>$service_taken]);        
    }
    public function edit(){
        $user = AllUsers::where('status','1')->where('id', Auth::user()->id)->first();
        return view('frontend.profile_edit',['users'=>$user]);      
    }
}
