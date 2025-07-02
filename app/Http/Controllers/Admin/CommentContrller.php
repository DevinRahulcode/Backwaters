<?php

namespace App\Http\Controllers\Admin;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class CommentContrller extends Controller
{
    public function index()
    {
        return view('admin.comment.list');
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'blogId'  => 'required|exists:blogs,id',
        'name'    => 'required|string|max:255',
        'email'   => 'required|email|max:255',
        'website' => 'nullable|url|max:255',
        'comment' => 'required|string|min:10',
    ]);

    Comment::create([
        'blog_id' => $validated['blogId'],
        'name'    => $validated['name'],
        'email'   => $validated['email'],
        'website' => $validated['website'],
        'comment' => $validated['comment'],
    ]);

    return redirect()->back()->with('success', 'Your comment has been submitted successfully!');
}

    public function show($id)
    {
        $comment = Comment::findOrFail(decrypt($id));

        return view('admin.comment.view',[
            'comment'=>$comment
        ]);
    }

    public function getAjaxCommentData()
    {
        $model = Comment::query()->with(['blog'])->orderBy('id', 'desc');

        return DataTables::eloquent($model)
            ->addIndexColumn()
            ->editColumn('title', function ($comment) {
                return $comment->blog->title;
            })
            ->editColumn('name', function ($comment) {
                return $comment['name'];
            })
            ->editColumn('email', function ($comment) {
                return $comment['email'];
            })
            ->addColumn('edit', function ($comment) {
                $edit_url = route('comment.show',encrypt($comment->id));
                $btn = '<a href="' . $edit_url . '"><i class="fal fa-edit"></i></a>';
                return $btn;
            })
            ->rawColumns(['edit'])
            ->toJson();
    }
}
