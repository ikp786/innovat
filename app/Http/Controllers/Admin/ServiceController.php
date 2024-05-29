<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Traits\FileUploadTrait;
use Illuminate\Http\Request;
use DB;
use DataTables;

class ServiceController extends Controller
{
    use FileUploadTrait;
    /**
     * Display a listing of the resource.
     */

    public function index(Request $request)
    {
        try {
            if ($request->ajax()) {
                $service = new Service();
                $data = $service->serviceFilter($request)->latest()->get();
                return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function ($row) {
                        return '
                            <a class="dropdown-item" href="' . route('admin.services.edit', $row->id) . '">
                                <i data-feather="edit-2" class="me-50"></i>
                                <span>Edit</span>
                            </a>
                            <a class="dropdown-item text-danger delete-record" data-id="' . $row->id . ' href="javascript:;">
                                <i data-feather="trash" class="me-50"></i>
                                <span>Delete</span>
                            </a>';
                    })
                    ->addColumn('icon', function ($row) {
                        return '<img style="width:50px;" class="rounded-circle icon_list" src="' . asset('uploads/service_icons/' . $row->icon) . '">';
                    })
                    ->addColumn('image', function ($row) {
                        return '<img style="width:50px;" class="rounded-circle image_list" src="' . asset('uploads/service_images/' . $row->image) . '">';
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
                    ->rawColumns(['action', 'icon', 'image', 'status', 'full_description'])
                    ->make(true);
            }
            return view('admin.services.index', compact('request'));
        } catch (\Exception $exception) {
            createLog('Service list : exception');
            createLog($exception);
            return response()->json(['status' => 500, 'message' => 'Something went wrong!']);
        }
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $service = new Service();
        return view('admin.services.create', compact('request', 'service'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request)
    {
        $service = new Service;
        $service = $this->saveService($request, $service);
        if ($service) {
            return redirect()->route('admin.services.index')->with('success', 'Service created successfully.');
        } else {
            return redirect()->back()->with('error', 'Oops...Something went wrong!');
        }
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(StoreServiceRequest $request, Service $service)
    {
        $service = $this->saveService($request, $service);
        if ($service) {
            return redirect()->route('admin.services.index')->with('success', 'Service updated successfully.');
        } else {
            return redirect()->back()->with('error', 'Oops...Something went wrong!');
        }
    }

    private function saveService(StoreServiceRequest $request, $service)
    {
        try {
            DB::beginTransaction();
            $service->fill($request->all());
            if ($file = $request->file('icon')) {
                $folder = public_path('/uploads/service_icons');
                $service->icon = $this->uploadFile($file, $folder);
            }
            if ($file = $request->file('image')) {
                $folder = public_path('/uploads/service_images');
                $service->image = $this->uploadFile($file, $folder);
            }
            $service->save();
            DB::commit();
            return $service;
        } catch (\Exception $e) {
            DB::rollBack();
            createLog('admin service save : exception');
            createLog($e);
            return null;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        return view('admin.services.create', compact('request', 'service'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service, Request $request)
    {
        return view('admin.services.create', compact('request', 'service'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return response()->json(['status' => 200, 'message' => 'Service delete successfully']);
    }

    public function updateStatus(Request $request, $id)
    {
        $service = Service::findOrFail($id);
        $service->status = $request->status;
        $service->save();
        return response()->json(['status' => 200, 'message' => 'Status updated successfully']);
    }
}
