@extends('layouts.app')
@section('title', 'Post CRUD')
@section('content')
<div class="container mt-5">
    <h1 class="text-center">Post CRUD</h1>
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Add New Post</a>

            <table class="table table-bordered table-hover text-center">
                <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Body</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @forelse($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->name }}</td>
                        <td>{{ $post->body }}</td>
                        <td>
                            <img src="{{ asset('storage/'.$post->image) }}" width="70">
                        </td>
                        <td>
                            <a href="{{ route('posts.edit', ['post' => $post]) }}" class="btn btn-warning">Edit</a>
                            <a href="{{ route('posts.show', ['post' => $post]) }}" class="btn btn-success">Show</a>
                            <form action="{{ route('posts.destroy', ['post' => $post->id]) }}" method="post" style="display: inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <div class="alert alert-danger">Nothing</div>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
