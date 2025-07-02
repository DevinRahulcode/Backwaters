<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Helpers\StorageHelper;
use App\Http\Requests\BlogRequest;
use Illuminate\Support\Facades\DB;
use App\Helpers\APIResponseMessage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class BlogController extends Controller
{
    public function index()
    {
        // Logic to display a list of blogs
        return view('admin.blogs.list');
    }

    public function create()
    {
        $blogs = Blog::select('id','title')->where('status', 'Y')->orderBy('order', 'asc')->get();
        // Logic to show the form for creating a new blog
        return view('admin.blogs.create',[
            'blogs' => $blogs
        ]);
    }

    public function store(BlogRequest $request)
    {
        try {
            //upload the file
            $imgName = null;
            if ($request->topImage) {
                $imageExtension = $request->topImage->extension();
                $imgName = date('m-d-Y_H-i-s') . '-' . uniqid() . '.' . $imageExtension;

                $uploadUrl = (new StorageHelper('blog', $imgName, $request->topImage))->uploadImage();
            }

            $bottomimgName = null;
            if ($request->bottomImage) {
                $imageExtension = $request->bottomImage->extension();
                $bottomimgName = date('m-d-Y_H-i-s') . '-' . uniqid() . '.' . $imageExtension;

                $uploadUrl = (new StorageHelper('blog', $bottomimgName, $request->bottomImage))->uploadImage();
            }

            DB::beginTransaction();

            $blog = new Blog();
            $blog->title = $request->title;
            $blog->top_image = $imgName;
            $blog->top_description = $request->topDescription;
            $blog->slug = Str::slug($request->title, '-');
            $blog->listing_description = $request->listingDescription;
            $blog->order = $request->order;
            $blog->releted_post_id =  is_array($request->reletedBlogId) ? json_encode($request->reletedBlogId) : null;

            $blog->created_by = Auth::id();
            $blog->save();

            DB::commit();

            return redirect()->route('blog.index')->with('success', APIResponseMessage::CREATED);
        } catch (\Exception $e) {
            dd($e->getMessage());
            DB::rollBack();
            return redirect()->route('blog.index')->with('error', APIResponseMessage::FAIL);
        }
    }

    public function show($id)
    {
        $blog = Blog::findOrFail(decrypt($id));
        $blogs = Blog::where('status', 'Y')->where('id','!=',decrypt($id))->orderBy('order', 'asc')->get();
        $topImageUrl = (new StorageHelper('blog', $blog->top_image))->getUrl();
        $bottomImageUrl = (new StorageHelper('blog', $blog->bottom_image))->getUrl();
        $blogReletedId= json_decode( $blog->releted_post_id);
        // Logic to show the form for editing the specified blog
        return view('admin.blogs.edit', [
            'blog' => $blog,
            'blogs' => $blogs,
            'topImageUrl' => $topImageUrl,
            'bottomImageUrl' => $bottomImageUrl,
            'blogReletedId' => $blogReletedId
        ]);
    }

    public function update(BlogRequest $request, string $id)
    {
        try {
            //upload the file
            $imgName = null;
            if ($request->topImage) {
                $imageExtension = $request->topImage->extension();
                $imgName = date('m-d-Y_H-i-s') . '-' . uniqid() . '.' . $imageExtension;

                $uploadUrl = (new StorageHelper('blog', $imgName, $request->topImage))->uploadImage();
            }

            $bottomimgName = null;
            if ($request->bottomImage) {
                $imageExtension = $request->bottomImage->extension();
                $bottomimgName = date('m-d-Y_H-i-s') . '-' . uniqid() . '.' . $imageExtension;

                $uploadUrl = (new StorageHelper('blog', $bottomimgName, $request->bottomImage))->uploadImage();
            }

            DB::beginTransaction();

            $blog = Blog::find($id);
            $blog->title = $request->title;
            if ($imgName) {
                $blog->top_image = $imgName;
            }

            $blog->top_description = $request->topDescription;
            $blog->slug = Str::slug($request->title, '-');
            $blog->listing_description = $request->listingDescription;
            $blog->order = $request->order;
            $blog->releted_post_id =  is_array($request->reletedBlogId) ? json_encode($request->reletedBlogId) : null;
            $blog->updated_by = Auth::id();
            // Save the changes
            $blog->save();

            DB::commit();

            return redirect()->route('blog.index')->with('success', APIResponseMessage::UPDATED);
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('blog.index')->with('error', APIResponseMessage::ERROR_EXCEPTION);
        }
    }

    public function destroy(string $id)
    {
        try {
            DB::beginTransaction();
            $discoverSriLanka = Blog::find($id);

            $discoverSriLanka->update(['deleted_by' => Auth::id()]);
            Blog::with([])->find($id)->delete();

            DB::commit();

            return redirect()->route('blog.index')->with('success', APIResponseMessage::DELETED);
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('blog.index')->with('error', APIResponseMessage::ERROR_EXCEPTION);

        }
    }

    public function activation(Request $request)
    {
        $data =  Blog::find($request->id);

        if ( $data->status == "Y" ) {

            $data->status = 'N';
            $data->save();
            $id = $data->id;

            return redirect()->route('blog.index')->with('success', APIResponseMessage::DEACTIVALE_RECORD);
        } else {
            $data->status = "Y";
            $data->save();
            $id = $data->id;

            return redirect()->route('blog.index')->with('success', APIResponseMessage::ACTIVATE_RECORD);
        }

    }


    public function getAjaxBlogData()
    {
        $model = Blog::query()->with([])->orderBy('id', 'desc');

        return DataTables::eloquent($model)
            ->addIndexColumn()
            ->editColumn('title', function ($blog) {
                return $blog['title'];
            })
            ->addColumn('edit', function ($blog) {
                $edit_url = route('blog.show',encrypt($blog->id));
                $btn = '<a href="' . $edit_url . '"><i class="fal fa-edit"></i></a>';
                return $btn;
            })
            ->addColumn('activation', function($blog){
                return view('admin.blogs.partials._status', compact('blog'));
            })
            ->addColumn('delete', function ($blog) {
                return view('admin.blogs.partials._delete', compact('blog'));
            })
            ->rawColumns(['edit','activation'])
            ->toJson();
    }
}
