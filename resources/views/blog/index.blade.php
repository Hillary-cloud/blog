@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 pt-2">
            <div class="row">
                <div class="col-8">
                    <h1 class="display-one">Our Blog</h1>
                    <p>Enjoy reading our blog, click on a post to read.</p>
                </div>
                    <div class="col-4">
                        <p>Create new Post</p>
                        <a href="/blog/create/post" class="btn btn-primary btn-sm">Add Post</a>
                    </div>
                    
                @forelse ($posts as $post )
                    <ul>
                        <li class="text-justify">
                            <a href="./blog/{{$post->id}}">{{ucfirst($post->title)}}</a>
                        </li>
                    </ul>
                @empty
                    <p class="text-warning">No blog post available</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection