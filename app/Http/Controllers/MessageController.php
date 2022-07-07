<?php

namespace App\Http\Controllers;

use App\Models\Messages;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function index(Request $request)
    {
       try{
        Messages::insertGetId([
            'user_id' => Auth::user()->id,
            'design_id' => $request->design_id,
            'massage' => $request->massage
        ]);
        return redirect()->back()->with('success','Your Request Successfully sent we are connect you soon');

       }catch( Exception $e){
        return redirect()->back()->withErrors($e->getMessage());
       }
    }
}
