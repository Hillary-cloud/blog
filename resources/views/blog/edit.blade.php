@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 pt-2">
            <a href="/blog" class="btn btn-outline-primary btn-sm">Go back</a>
            <div class="border rounded mt-5">
                <h1 class="display-4">Edit Post</h1>
                <p>Edit and submit this form to update a post.</p>
                <hr>
                <form action="" method="Post">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="control-group col-12">
                            <label for="title">Post Title</label>
                            <input type="text" id="title" class="form-control"  name="title" placeholder="Enter Post Title" value="{{$post->title}}" required>
                        </div>
                        <div class="control-group col-12 mt-2">
                            <label for="body">Post Body</label>
                            <textarea name="body" id="body" cols="10" rows="5" class="form-control" placeholder="Enter Post Body" required>{{$post->body}}</textarea>
                        </div>
                        <div class="row mt-2">
                            <div class="control-group col-12 text-center">
                                <button id="btn-submit" class="btn btn-primary">Update Post</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection