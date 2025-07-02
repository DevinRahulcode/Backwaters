<?php

namespace App\Http\Controllers\Front;

use App\Models\Blog;
use App\Models\Comment;
use App\Mail\CommentMail;
use Illuminate\Http\Request;
use App\Helpers\StorageHelper;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class BlogController extends Controller
{
public function index(Request $request)
    {
        $meta = 5;
        $search = $request->input('search');

        $blogsQuery = Blog::where('status', 'Y');

        if ($search) {
            $blogsQuery->where(function($query) use ($search) {
                $query->where('title', 'LIKE', "%{$search}%")
                      ->orWhere('top_description', 'LIKE', "%{$search}%"); 
            });
        }
        
        $blogs = $blogsQuery->orderBy('order', 'asc')->paginate(3)->appends(['search' => $search]);

        if ($blogs->isNotEmpty()) {
            $blogs->getCollection()->transform(function ($blog) {
                $blog->topImageUrl = (new StorageHelper('blog', $blog->top_image))->getUrl();
                $blog->bottomImageUrl = (new StorageHelper('blog', $blog->bottom_image))->getUrl();
                return $blog;
            });
        }

        $recentlyAddedBlogs = Blog::where('status', 'Y')
                                  ->latest() 
                                  ->limit(3)
                                  ->get();
        
        return view('frontend.blogs', [
            'blogs' => $blogs,
            'recentlyAddedBlogs' => $recentlyAddedBlogs,
            'meta' => $meta,
        ]);
    }

    public function show($slug)

    {
        $meta = 8;
        $blog = Blog::where('slug', $slug)->where('status', 'Y')->firstOrFail();
        $blog->view_count = $blog->view_count + 1;
        $blog->save();

        $blog->topImageUrl = (new StorageHelper('blog', $blog->top_image))->getUrl();

        $recentlyAddedBlogs = Blog::where('status', 'Y')
            ->where('id', '!=', $blog->id)
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();

        $blog->previousBlog = Blog::where('status', 'Y')
            ->where('id', '<', $blog->id)
            ->orderBy('id', 'desc')
            ->first();

    
        $blog->nextBlog = Blog::where('status', 'Y')
            ->where('id', '>', $blog->id)
            ->orderBy('id', 'asc')
            ->first();  

        $ids = json_decode($blog->releted_post_id) ?? [];

        $reletedBlogs = Blog::where('status', 'Y')
            ->where('id', '!=', $blog->id)
            ->whereIn('id', $ids)
            ->orderBy('order', 'asc')
            ->get();

            $subtitle = $blog->title;

        //dd($subtitle);
        return view('frontend.blog_details', [
            'blog' => $blog,
            'recentlyAddedBlogs' => $recentlyAddedBlogs,
            'reletedBlogs' => $reletedBlogs,
            'meta' => $meta,
            'subtitle' => $subtitle,
            
        ]);
    }

    public function store(Request $request)
    {
        try{
            $request->validate([
                'blogId' => 'required|exists:blogs,id',
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'website' => 'nullable|url|max:255',
                'comment' => 'required|string|max:1000',
            ]);
            DB::beginTransaction();

            $comment = new Comment();
            $comment->blog_id = $request->blogId;
            $comment->name = $request->name;
            $comment->email = $request->email;
            $comment->website = $request->website;
            $comment->comment = $request->comment;
            $comment->save();

            $blogAuthor = $request->email;

            if ($blogAuthor) {
                    $blog = Blog::where('id', $request->blogId)->where('status', 'Y')->firstOrFail();

                    Mail::to($request->email)->send(new CommentMail(
                    $blog->title,
                    $request->name,
                    $request->website,
                    $request->comment
                ));
            }

            DB::commit();

            return redirect()->back()->with('success', 'Comment added successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Comment added Fail!');
        }
    }
}
