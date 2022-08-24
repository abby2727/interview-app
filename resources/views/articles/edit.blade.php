@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mt-4">
                <div class="card-header">
                    <div class="card-title">
                        <h4>
                            Edit Article
                            <a href="{{ route('articles.index') }}" class="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('articles.update', $articles->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="" class="form-label">Article Title</label>
                            <input type="text" name="title" value="{{ $articles->title }}" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Content</label>
                            <input type="text" name="content" value="{{ $articles->content }}" class="form-control">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection
