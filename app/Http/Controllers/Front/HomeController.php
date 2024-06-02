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
        return view('front.index', compact('title'));
    }

    function news(Request $request, $slug = null)
    {
        $title = 'News Page';
        if ($slug) {
            $data = Service::whereSlug($slug)->first() ?? Page::whereSlug($slug)->first();
            if (!$data) {
                abort(404);
            }
            $modelName = $data instanceof Service ? 'service' : 'page';
            $news = News::active()->get();
            return view('front.services', compact('title', 'data', 'modelName', 'news'));
        }
        return view('front.index', compact('title'));
    }


    function services(Request $request)
    {
        $title = 'Service Page';
        return view('front.service', compact('title'));
    }
}
