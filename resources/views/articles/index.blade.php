@extends('layouts.app')

@section('content')
    <div class="card mt-4">
        <div class="card-header">
            <div class="card-title">
                <h4>
                    List of Article
                    <a href="{{ route('articles.create') }}" class="btn btn-info float-end">Create New Article</a>
                </h4>
            </div>
        </div>
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="allert">
                    {{ session('status') }}
                </div>
            @endif
            @if (session('status_delete'))
                <div class="alert alert-danger" role="allert">
                    {{ session('status_delete') }}
                </div>
            @endif

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Article Title</th>
                        <th scope="col">Article Content Snippet</th>
                        <th scope="col">Created Date</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($articles as $article)
                        <tr>
                            <td>{{ $article->id }}</td>
                            <td>
                                <a href="{{ route('articles.show', $article->id) }}" class="text-decoration-none">{{ $article->title }}</a>
                            </td>
                            <td>{{ $article->content }}</td>
                            <td>{{ $article->created_at }}</td>
                            <td>
                                <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-primary">Edit</a>
                            </td>
                            <td>
                                <form action="{{ route('articles.destroy', $article->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
