<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\AllUsers;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
       
       $user = AllUsers::where('status','active')->get();
        // dd($user);
       return view('frontend.profile2',['users'=>$user]);        
    }
}
