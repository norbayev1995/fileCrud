@extends('layouts.app')
@section('title', 'Create New Post')
@section('content')
<div class="container mt-5">
    <h1 class="text-center">Create New Post</h1>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form id="createForm" action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter post name" value="{{ old('name') }}" required>
                    @error('name')<span class="text-danger">{{ $message }}</span>@enderror
                </div>
                <div class="mb-3">
                    <label for="body" class="form-label">Body</label>
                    <textarea class="form-control" id="body" name="body" rows="3" placeholder="Enter post body" required>{{ old('body') }}</textarea>
                    @error('body')<span class="text-danger">{{ $message }}</span>@enderror
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" name="image" class="form-control" id="image" placeholder="Enter post image" value="{{ old('image') }}" required>
                    @error('image')<span class="text-danger">{{ $message }}</span>@enderror
                </div>
                <button type="submit" class="btn btn-primary">Add Post</button>
                <a href="{{ route('posts.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection
