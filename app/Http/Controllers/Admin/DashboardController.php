<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Page;
use App\Models\Service;
use App\Models\Setting;
use App\Traits\FileUploadTrait;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    use FileUploadTrait;
    function index()
    {
        $services = Service::count();
        $pages = Page::count();
        $news = News::count();
        $data = compact('services', 'pages', 'news');
        return view('admin.dashboard', $data);
    }

    function setting()
    {
        $setting = Setting::first();
        return view('admin.settings.create', compact('setting'));
    }

    function updateSetting(Request $request, $id = null)
    {
        try {
            $setting = Setting::firstOrNew(['id' => $request->id]);
            $setting->fill($request->all());
            if ($file = $request->file('brochure_url')) {
                $folder = public_path('/uploads/brochure_images');
                $setting->brochure_url = $this->uploadFile($file, $folder);
            }
            $setting->save();
            return redirect()->back()->with('success', 'Setting update successfully!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage() . ' Nn Line ' . $th->getLine());
        }
    }
}
