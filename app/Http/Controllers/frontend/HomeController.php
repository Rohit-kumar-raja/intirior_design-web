<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Service;
use App\Models\Site_infos;
use App\Models\Testimonial;
use Exception;

class HomeController extends Controller
{
    public function index()
    {
        $category = Category::where('status', '1')->Limit('3')->get();
        $testimonial = Testimonial::where('status', '1')->get();
        $contact = Site_infos::where('status', '1')->first();
        $services = Service::where('status', 1)->orderByDesc('id')->take(20)->get();
        // dd($contact);
        return view('frontend.index', ['cat' => $category, 'testi' => $testimonial, 'contact' => $contact, 'services' => $services]);
    }

    public function feedback(Request $request)
    {
        try {
            $id = Testimonial::insertGetId($request->except('_token',));

            if ($request->file('images')) {
                $image_name = date('YmdHis')  . $request->file('images')->getClientOriginalName();
                Testimonial::where('id', $id)->update(['images' => $image_name]);
                $this->update_images('testimonials', $id, $request->file('images'), 'testimonials', 'images');
            }

            return redirect()->route('feedback.thankyou')->with('success', ' Thank You for your Valuable feedback !!! ');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function thankyou()
    {
        return view('frontend.thankyou');
    }
}
