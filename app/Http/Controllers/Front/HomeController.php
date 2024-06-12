<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\News;
use App\Models\Page;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Request;

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
            return view('front.news.detail', compact('title', 'news', 'newsList'));
        }
        // Check if the request is an AJAX request
        if ($request->ajax()) {
            $news = News::active()->paginate(10); // Adjust the number of items per page as needed
            return view('front.news.pagination', compact('news'))->render();
        }
        $news = News::active()->paginate(10);
        return view('front.news.index', compact('title', 'news'));
    }

    function aboutUs(Request $request)
    {
        $title = 'About Us';
        return view('front.about-us', compact('title'));
    }

    function ourLocations(Request $request, $location)
    {
        $title = 'Our Location';
        return view('front.locations.' . $location, compact('title'));
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
