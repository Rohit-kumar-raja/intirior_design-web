<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\AllUsers;
use App\Models\Messages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
class ProfileController extends Controller
{
    public function index()
    {

        $user = AllUsers::where('status', '1')->where('id', Auth::user()->id)->first();
        $service_taken = Messages::where('user_id', $user->id)->get();
        return view('frontend.profile2', ['users' => $user, 'takens' => $service_taken]);
    }
    public function edit()
    {
        $user = AllUsers::where('status', '1')->where('id', Auth::user()->id)->first();
        return view('frontend.profile_edit', ['users' => $user]);
    }

    public function update(Request $request)
    {
        try {
            $user = AllUsers::where('id', Auth::user()->id)->update($request->except('_token', 'images'));

            if ($request->file('images')) {
                $this->update_images('all_users', Auth::user()->id, $request->file('images'), 'profile', 'images');
            }
            return redirect()->back()->with('success', 'Your Profile Successfully Updated');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function passwordUpdate(Request $request)
    {
        if ($request->new_password == $request->repeat_password) {
            try {
                $request->validate([
                    'old_password' => ['required', Rules\Password::defaults(),'minlenth'],
                ]);
                $user = AllUsers::where('id', Auth::user()->id)->first();
                $result =  Hash::check($request->old_password, $user->password);
                dd($result);

                $user = AllUsers::where('id', Auth::user()->id)->update($request->except('_token', 'images'));
                return redirect()->back()->with('success', 'Your Password Successfully Updated');
            } catch (Exception $e) {
                return redirect()->back()->with('error', $e->getMessage());
            }
        } else {
            return redirect()->back()->with('error', 'New and Repeat password  Not matched');
        }
    }
}
