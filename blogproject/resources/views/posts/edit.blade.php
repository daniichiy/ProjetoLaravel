@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    
    <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

        <div class="form-group">
            <label for="title">Title</label>
            <input
                type="text"
                name="title"
                id="title"
                class="form-control"
                placeholder="Title"
                value="{{ old('title', $post->title) }}"
            >
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <textarea
                name="body"
                id="body"
                class="form-control"
                placeholder="Body"
                rows="5"
            >{{ old('body', $post->body) }}</textarea>
        </div>
        <div class="mb-3">
            <label for="cover_image" class="form-label">Cover Image</label>
            <input
                type="file"
                name="cover_image"
                id="cover_image"
                class="form-control"
            >
        </div>

        <button type="sumbit" class="btn btn-primary">Submit</button>
    </form>
@endsection