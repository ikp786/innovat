<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Page;
use App\Models\Service;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index()
    {
        $services = Service::count();
        $pages = Page::count();
        $news = News::count();
        $data = compact('services','pages','news');
        return view('admin.dashboard',$data);
    }
}
