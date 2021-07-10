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
}
