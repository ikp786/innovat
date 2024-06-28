<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Mail\ContactUsMailNotification;
use App\Models\Banner;
use App\Models\News;
use App\Models\Page;
use App\Models\ContactUs;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Front\Validator;
use App\Models\Blog;

class HomeController extends Controller
{
    function index(Request $request, $slug = null)
    {
        $title = 'Home Page';
        $services = Service::active()->get();
        $banners = Banner::active()->get();
        $settings = Setting::first();
        return view('front.index', compact('title', 'services', 'banners','settings'));
    }

    function services(Request $request, $slug = null)
    {
        if ($slug) {
            $data = Service::whereSlug($slug)->first() ?? Page::whereSlug($slug)->first();
            if (!$data) {
                abort(404);
            }
            $modelName = $data instanceof Service ? 'service' : 'page';
            $news = News::active()->get();
            $title = $data->title;

            return view('front.services', compact('title', 'data', 'modelName', 'news'));
        }
        $title = 'Service Page';
        return view('front.service', compact('title'));
    }

    function news(Request $request, $slug = null)
    {
        $title = 'News Page';
        if ($slug) {
            $news = News::whereSlug($slug)->first();
            if (!$news) {
                abort(404);
            }
            $title = $news->title;
            $newsList = News::active()->paginate(10);
            $blogList = Blog::active()->paginate(5);
            return view('front.news.detail', compact('title', 'news', 'newsList','blogList'));
        }
        // Check if the request is an AJAX request
        if ($request->ajax()) {
            $news = News::active()->paginate(10); // Adjust the number of items per page as needed
            return view('front.news.pagination', compact('news'))->render();
        }
        $news = News::active()->paginate(10);
        return view('front.news.index', compact('title', 'news'));
    }

    function blog(Request $request, $slug = null)
    {
        $title = 'Blog Page';
        if ($slug) {
            $blog = Blog::whereSlug($slug)->first();
            if (!$blog) {
                abort(404);
            }
            $title = $blog->title;
            $blogList = Blog::active()->paginate(5);
            $newsList = News::active()->paginate(5);
            return view('front.blog.detail', compact('title', 'blog', 'blogList','newsList'));
        }
        // Check if the request is an AJAX request
        if ($request->ajax()) {
            $blogs = Blog::active()->paginate(5); // Adjust the number of items per page as needed
            return view('front.blog.pagination', compact('blogs'))->render();
        }
        $blogs = Blog::active()->paginate(5);
        return view('front.blog.index', compact('title', 'blogs'));
    }

    function aboutUs(Request $request)
    {
        $title = 'About Us';
        return view('front.about-us', compact('title'));
    }

    function ourLocations(Request $request, $location)
    {
        $title = 'Our Location';
         $services = Service::active()->get();
        return view('front.locations.' . $location, compact('title','services'));

    }


    // store data in table contact_us
    function saveContactUsData(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'contact_number' => 'required|string|max:15',
            'location' => 'required|string|max:255',
            'service_id' => 'required|integer',
            'message' => 'required|string'
            ]);

        $contactUs = new ContactUs();
        $contactUs->name = $request->input('name');
        $contactUs->email = $request->input('email');
        $contactUs->contact_number = $request->input('contact_number');
        $contactUs->location = $request->input('location');
        $contactUs->service_id = $request->input('service_id');
        $contactUs->message = $request->input('message');
        $contactUs->save();
        // Send email to admin
    \Mail::to(env('ADMIN_EMAIL'))->send(new ContactUsMailNotification($contactUs));

        return response()->json(['status' => true,'message' => 'We will get back to you soon !!!']);
        return redirect()->back()->with('success', 'Data stored successfully!');


    }



    function webinars()
    {
        $title = 'Webinars';
        return view('front.webinars', compact('title'));
    }

    function clientStories()
    {
        $title = 'Client Stories';
        return view('front.client-stories', compact('title'));
    }

    function faq()
    {
        $title = 'Frequently Asked Questions (FAQ)';
        return view('front.faq', compact('title'));
    }

    function careers()
    {
        $title = 'Careers';
        return view('front.careers', compact('title'));
    }

}
