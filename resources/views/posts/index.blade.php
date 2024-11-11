@extends('layouts.app')
@section('head-title', 'Laravel Template')

@section('main-content')
    <main>
        <div class="container-fluid">
            <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Create</a>
            <!-- Table -->
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Description</th>
                        <th>Functions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($posts_list as $post)
                        <tr class="align-middle">
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->author }}</td>
                            <td>{{ substr($post->description, 0, 125) . '...' }}</td>
                            <td>
                                <a href="{{ route('posts.show', $post) }}" class="btn btn-success">Show</a>
                                <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('posts.delete', $post) }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <div>Not Available</div>
                    @endforelse
                </tbody>
            </table>
        </div>
    </main>
@endsection
