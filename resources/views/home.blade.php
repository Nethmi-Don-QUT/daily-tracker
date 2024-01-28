@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <!-- Display posts table -->
                    <!-- <a href="/post/create" class="btn btn-primary">Create Post</a>
                    <h3>Your Blog Posts </h3>

                    @if(count($posts) > 0)
                    <table class="table table-striped">
                        <tr>
                            <th>Title</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        @foreach($posts as $post)
                        <tr>
                            <th>{{$post->title}}</th>
                            <th><a href="/posts/{$post->id}/edit" class="btn btn-default">Edit</a></th>
                            <th>Delete</th>
                        </tr>
                        @endforeach
                    </table>
                    @else
                    <p>No posts available</p>
                    @endif -->

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
