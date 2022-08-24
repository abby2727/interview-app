@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mt-4">
                <div class="card-header">
                    <div class="card-title">
                        <h4>
                            Specific Article
                            <a href="{{ route('articles.index') }}" class="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <h4>{{ $articles->title }}</h4>
                        <p>{{ $articles->content }}</p>
                        <p>{{ $articles->created_at }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
