<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Page;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(Request $request, $slug = null)
    {
        $title = 'Home Page';
        $services = Service::active()->get();
        return view('front.index', compact('title', 'services'));
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
            return view('front.news.detail', compact('title', 'news'));
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
        return view('front.about-us');
    }
}
