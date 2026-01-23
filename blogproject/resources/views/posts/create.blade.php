@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    
    <form action="{{ action([App\Http\Controllers\PostsController::class, 'store']) }}" method="POST">
    @csrf

        <div class="form-group">
            <label for="title">Title</label>
            <input
                type="text"
                name="title"
                id="title"
                class="form-control"
                placeholder="Title"
                value="{{ old('title') }}"
            >
        </div>
    </form>

@endsection