<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Models\Blog;
use App\Traits\FileUploadTrait;
use Illuminate\Http\Request;
use DataTables;
use DB;
class BlogController extends Controller
{
    use FileUploadTrait;
    /**
     * Display a listing of the resource.
     */

    public function index(Request $request)
    {
        try {
            if ($request->ajax()) {
                $blog = new Blog();
                $data = $blog->blogFilter($request)->latest()->get();
                return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function ($row) {
                        return '
                            <a class="dropdown-item" href="' . route('admin.blogs.edit', $row->id) . '">
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
                        return '<img style="width:50px; height:50px;" class="image_list" src="' . asset('uploads/blog_images/' . $row->image) . '">';
                    })

                    ->addColumn('banner_image', function ($row) {
                        return '<img style="width:50px; height:50px;" class="image_list" src="' . asset('uploads/blog_banner_images/' . $row->banner_image) . '">';
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
                    ->rawColumns(['action', 'service_name', 'image', 'banner_image', 'status', 'full_description'])
                    ->make(true);
            }
            return view('admin.blogs.index', compact('request'));
        } catch (\Exception $exception) {
            createLog('Blog list : exception');
            createLog($exception);
                // return response()->json(['status' => 500, 'message' => 'Something went wrong!']);
            return view('admin.blogs.index', compact('request'));
        }
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $blog = new Blog();
        return view('admin.blogs.create', compact('request', 'blog'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogRequest $request)
    {
        $blog = new Blog;
        $blog = $this->saveBlog($request, $blog);
        if ($blog) {
            return redirect()->route('admin.blogs.index')->with('success', 'Blog created successfully.');
        } else {
            return redirect()->back()->with('error', 'Oops...Something went wrong!');
        }
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(StoreBlogRequest $request, Blog $blog)
    {
        $blog = $this->saveBlog($request, $blog);
        if ($blog) {
            return redirect()->route('admin.blogs.index')->with('success', 'Blog updated successfully.');
        } else {
            return redirect()->back()->with('error', 'Oops...Something went wrong!');
        }
    }

    private function saveBlog(StoreBlogRequest $request, $blog)
    {
        try {
            DB::beginTransaction();
            $blog->fill($request->all());
            if ($file = $request->file('image')) {
                $folder = public_path('/uploads/blog_images');
                $blog->image = $this->uploadFile($file, $folder);
            }
            if ($file = $request->file('banner_image')) {
                $folder = public_path('/uploads/blog_banner_images');
                $blog->banner_image = $this->uploadFile($file, $folder);
            }
            $blog->save();
            DB::commit();
            return $blog;
        } catch (\Exception $e) {
            DB::rollBack();
            createLog('admin blog save : exception');
            createLog($e);
            return null;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        return view('admin.blogs.create', compact('request', 'blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog, Request $request)
    {
        return view('admin.blogs.create', compact('request', 'blog'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return response()->json(['status' => 200, 'message' => 'Blog deleted successfully']);

    }

    public function updateStatus(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);
        $blog->status = $request->status;
        $blog->save();
        return response()->json(['status' => 200, 'message' => 'Status updated successfully']);
    }
}
