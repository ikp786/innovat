<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Http\Requests\StorePageRequest;
use App\Models\Service;
use App\Traits\FileUploadTrait;
use Illuminate\Http\Request;
use DataTables;
use DB;

class PageController extends Controller
{
    use FileUploadTrait;
    /**
     * Display a listing of the resource.
     */

    public function index(Request $request)
    {
        try {
            if ($request->ajax()) {
                $page = new Page();
                $data = $page->pageFilter($request)->with('service')->latest()->get();
                return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function ($row) {
                        return '
                            <a class="dropdown-item" href="' . route('admin.pages.edit', $row->id) . '">
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
                        return '<img style="width:50px;" class="rounded-circle image_list" src="' . asset('uploads/page_images/' . $row->image) . '">';
                    })

                    ->addColumn('status', function ($row) {
                        return '<div class="form-check form-check-primary form-switch">
                                    <input type="checkbox" class="form-check-input status-toggle" id="status_' . $row->id . '" ' . ($row->status ? 'checked' : '') . ' data-id="' . $row->id . '">
                                </div>';
                    })


                    ->addColumn('full_description', function ($row) {
                        // Check if the length of description is greater than 180
                        if (strlen($row->description) > 250) {
                            // Shorten the description to 180 characters and add "Show More" link
                            $shortenedDescription = substr(strip_tags($row->description), 0, 250) . '...';
                            $fullDescription = $row->description;
                            return '<div class="description-container">
                                <span class="shortened-description">' . $shortenedDescription . '</span>
                                <span class="full-description " style="display:none;">' . strip_tags($fullDescription) . '</span>
                                <a class="show-more-button " onclick="toggleDescription(this)"> Show More</a>
                            </div>';
                        }
                        return strip_tags($row->description);
                    })
                    ->rawColumns(['action', 'service_name', 'image', 'status', 'full_description'])
                    ->make(true);
            }
            return view('admin.pages.index', compact('request'));
        } catch (\Exception $exception) {
            createLog('Page list : exception');
            createLog($exception);
                // return response()->json(['status' => 500, 'message' => 'Something went wrong!']);
            return view('admin.pages.index', compact('request'));
        }
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $page = new Page();
        $services = Service::active()->pluck('title','id');
        return view('admin.pages.create', compact('request', 'page', 'services'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePageRequest $request)
    {
        $page = new Page;
        $page = $this->savePage($request, $page);
        if ($page) {
            return redirect()->route('admin.pages.index')->with('success', 'Page created successfully.');
        } else {
            return redirect()->back()->with('error', 'Oops...Something went wrong!');
        }
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(StorePageRequest $request, Page $page)
    {
        $page = $this->savePage($request, $page);
        if ($page) {
            return redirect()->route('admin.pages.index')->with('success', 'Page updated successfully.');
        } else {
            return redirect()->back()->with('error', 'Oops...Something went wrong!');
        }
    }

    private function savePage(StorePageRequest $request, $page)
    {
        try {
            DB::beginTransaction();
            $page->fill($request->all());
            if ($file = $request->file('image')) {
                $folder = public_path('/uploads/page_images');
                $page->image = $this->uploadFile($file, $folder);
            }
            $page->save();
            DB::commit();
            return $page;
        } catch (\Exception $e) {
            DB::rollBack();
            createLog('admin page save : exception');
            createLog($e);
            return null;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Page $page)
    {
        return view('admin.pages.create', compact('request', 'page'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Page $page, Request $request)
    {
        $services = Service::active()->pluck('title','id');
        return view('admin.pages.create', compact('request', 'page', 'services'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Page $page)
    {
        $page->delete();
        return response()->json(['status' => 200, 'message' => 'Page deleted successfully']);

    }

    public function updateStatus(Request $request, $id)
    {
        $page = Page::findOrFail($id);
        $page->status = $request->status;
        $page->save();
        return response()->json(['status' => 200, 'message' => 'Status updated successfully']);
    }
}
