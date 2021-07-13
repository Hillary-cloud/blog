<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;


class BlogPostController extends Controller
{
    public function index()
    {
        $posts = BlogPost::all();
        return view('blog.index',[
            'posts' => $posts,
        ]);
    }
    public function show(BlogPost $blogPost)
    {
        return view('blog.show',[
            'post' => $blogPost,
        ]);
    }
    public function create()
    {
        return view('blog.create');
    }
    public function store(Request $request)
    {
        $newPost=BlogPost::create([
            'title'=>$request->title,
            'body'=>$request->body,
            'user_id'=>1
        ]);
        return redirect('blog/'.$newPost->id);
    }
    public function edit(BlogPost $blogPost)
    {
        return view('blog.edit',[
            'post'=>$blogPost,
        ]);
    }
    public function update(BlogPost $blogPost, Request $request)
    {
        $blogPost->update([
            'title'=>$request->title,
            'body'=>$request->body,
        ]);
        return redirect('blog/'.$blogPost->id);
    }
    public function destroy(BlogPost $blogPost)
    {
        $blogPost->delete();
        return redirect('/blog');
    }
}
