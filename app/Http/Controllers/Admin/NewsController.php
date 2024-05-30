<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Traits\FileUploadTrait;
use Illuminate\Http\Request;
use DataTables;
use DB;

class NewsController extends Controller
{
    use FileUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        try {
            if ($request->ajax()) {
                $news = new News();
                $data = $news->newsFilter($request)->latest()->get();
                return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function ($row) {
                        return '
                            <a class="dropdown-item" href="' . route('admin.newses.edit', $row->id) . '">
                                <i data-feather="edit-2" class="me-50"></i>
                                <span>Edit</span>
                            </a>
                            <a class="dropdown-item text-danger delete-record" data-id="' . $row->id . ' href="javascript:;">
                                <i data-feather="trash" class="me-50"></i>
                                <span>Delete</span>
                            </a>';
                    })
                    ->addColumn('image', function ($row) {
                        return '<img style="width:50px;" class="rounded-circle image_list" src="' . asset('uploads/news_images/' . $row->image) . '">';
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
                    ->rawColumns(['action', 'image', 'status', 'full_description'])
                    ->make(true);
            }
            return view('admin.newses.index', compact('request'));
        } catch (\Exception $exception) {
            createLog('News list : exception');
            createLog($exception);
            return view('admin.newses.index', compact('request'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $news = new News();
        return view('admin.newses.create', compact('request', 'news'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNewsRequest $request)
    {
        $news = new News;
        $news = $this->saveNews($request, $news);
        if ($news) {
            return redirect()->route('admin.newses.index')->with('success', 'News created successfully.');
        } else {
            return redirect()->back()->with('error', 'Oops...Something went wrong!');
        }
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(StoreNewsRequest $request, News $news, $id)
    {
        $news = $news->find($id);
        $news = $this->saveNews($request, $news);
        if ($news) {
            return redirect()->route('admin.newses.index')->with('success', 'News updated successfully.');
        } else {
            return redirect()->back()->with('error', 'Oops...Something went wrong!');
        }
    }

    private function saveNews(StoreNewsRequest $request, $news)
    {
        try {
            DB::beginTransaction();
            $news->fill($request->all());
            if ($file = $request->file('image')) {
                $folder = public_path('/uploads/news_images');
                $news->image = $this->uploadFile($file, $folder);
            }
            $news->save();
            DB::commit();
            return $news;
        } catch (\Exception $e) {
            DB::rollBack();
            createLog('admin news save : exception');
            createLog($e);
            return null;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        return view('admin.newses.create', compact('request', 'news'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news, Request $request, $id)
    {
        $news = $news->find($id);
        return view('admin.newses.create', compact('request', 'news'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news,$id)
    {
        $news->find($id)->delete();
        return response()->json(['status' => 200, 'message' => 'news deleted successfully']);
    }

    public function updateStatus(Request $request, $id)
    {
        $news = News::findOrFail($id);
        $news->status = $request->status;
        $news->save();
        return response()->json(['status' => 200, 'message' => 'Status updated successfully']);
    }
}
