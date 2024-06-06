<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Http\Requests\StoreBannerRequest;
use App\Http\Requests\UpdateBannerRequest;
use App\Traits\FileUploadTrait;
use Illuminate\Http\Request;
use DataTables;
use DB;
class BannerController extends Controller
{
   
    use FileUploadTrait;
    /**
     * Display a listing of the resource.
     */

    public function index(Request $request)
    {
        try {
            if ($request->ajax()) {
                $banner = new Banner();
                $data = $banner->bannerFilter($request)->latest()->get();
                return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function ($row) {
                        return '
                            <a class="dropdown-item" href="' . route('admin.banners.edit', $row->id) . '">
                                <i data-feather="edit-2" class="me-50"></i>
                                <span>Edit</span>
                            </a>
                            <a class="dropdown-item text-danger delete-record" data-id="' . $row->id . ' href="javascript:;">
                                <i data-feather="trash" class="me-50"></i>
                                <span>Delete</span>
                            </a>';
                    })
                    ->addColumn('service_name', function ($row) {
                        return $row->service->title ?? '';
                    })
                    ->addColumn('image', function ($row) {
                        return '<img style="width:50px;" class="image_list" src="' . asset('uploads/banner_images/' . $row->image) . '">';
                    })

                    ->addColumn('status', function ($row) {
                        return '<div class="form-check form-check-primary form-switch">
                                    <input type="checkbox" class="form-check-input status-toggle" id="status_' . $row->id . '" ' . ($row->status ? 'checked' : '') . ' data-id="' . $row->id . '">
                                </div>';
                    })


                    ->addColumn('full_description', function ($row) {
                        // Check if the length of description is greater than 50
                        if (strlen($row->description) > 50) {
                            // Shorten the description to 50 characters and add "Show More" link
                            $shortenedDescription = substr(strip_tags($row->description), 0, 50) . '...';
                            $fullDescription = strip_tags($row->description);
                            return '<div class="description-container">
                                <span class="shortened-description">' . $shortenedDescription . '</span>
                                <span class="full-description " style="display:none;">' . $fullDescription . '</span>
                                <a class="show-more-button " onclick="toggleDescription(this)"> Show More</a>
                            </div>';
                        }
                        return strip_tags($row->description);
                    })
                    ->rawColumns(['action', 'image', 'status', 'full_description'])
                    ->make(true);
            }
            return view('admin.banners.index', compact('request'));
        } catch (\Exception $exception) {
            createLog('Banner list : exception');
            createLog($exception);
                // return response()->json(['status' => 500, 'message' => 'Something went wrong!']);
            return view('admin.banners.index', compact('request'));
        }
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $banner = new Banner();
        return view('admin.banners.create', compact('request', 'banner'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBannerRequest $request)
    {
        $banner = new Banner;
        $banner = $this->saveBanner($request, $banner);
        if ($banner) {
            return redirect()->route('admin.banners.index')->with('success', 'Banner created successfully.');
        } else {
            return redirect()->back()->with('error', 'Oops...Something went wrong!');
        }
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(StoreBannerRequest $request, Banner $banner)
    {
        $banner = $this->saveBanner($request, $banner);
        if ($banner) {
            return redirect()->route('admin.banners.index')->with('success', 'Banner updated successfully.');
        } else {
            return redirect()->back()->with('error', 'Oops...Something went wrong!');
        }
    }

    private function saveBanner(StoreBannerRequest $request, $banner)
    {
        try {
            DB::beginTransaction();
            $banner->fill($request->all());
            if ($file = $request->file('image')) {
                $folder = public_path('/uploads/banner_images');
                $banner->image = $this->uploadFile($file, $folder);
            }
            $banner->save();
            DB::commit();
            return $banner;
        } catch (\Exception $e) {
            DB::rollBack();
            createLog('admin banner save : exception');
            createLog($e);
            return null;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Banner $banner)
    {
        return view('admin.banners.create', compact('request', 'banner'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Banner $banner, Request $request)
    {
        return view('admin.banners.create', compact('request', 'banner'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banner $banner)
    {
        $banner->delete();
        return response()->json(['status' => 200, 'message' => 'Banner deleted successfully']);

    }

    public function updateStatus(Request $request, $id)
    {
        $banner = Banner::findOrFail($id);
        $banner->status = $request->status;
        $banner->save();
        return response()->json(['status' => 200, 'message' => 'Status updated successfully']);
    }
}
