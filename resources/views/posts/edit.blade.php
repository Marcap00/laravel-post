@extends('layouts.app')

@section('main-content')
    <div class="container">
        <div class="row">
            <form action="{{ route('post.update', $post->id) }}" method="POST">
                @method('PUT')
                @csrf

                <h1 class="fw-bold my-5 fst-italic text-decoration-underline">{{ $post->name }}</h1>

                <div class="mb-3">
                    <label for="post-title" class="form-label">Title:</label>
                    <input type="text" class="form-control" id="post-title" name="title"
                        value="{{ old('title', $post->title) }}">
                    @error('name')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="post-author" class="form-label">Author:</label>
                    <input type="text" class="form-control" id="post-author" name="author"
                        value="{{ old('author', $post->author) }}">
                    @error('name')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="post-description" class="form-label">Desription:</label>
                    <input type="text" class="form-control" id="post-description" name="description"
                        value="{{ old('description', $post->description) }}">
                    @error('name')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div>
                    <button type="submit" class="btn btn-success">Edit {{ $post->name }} !</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                </div>
            </form>
        </div>
    </div>
@endsection
