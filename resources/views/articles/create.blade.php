@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mt-4">
                <div class="card-header">
                    <div class="card-title">
                        <h4>
                            Post Article
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

                    <form action="{{ route('articles.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="" class="form-label">Article Title</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Content</label>
                            <input type="text" name="content" class="form-control">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Post</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection
