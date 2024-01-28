@extends('layouts.app')
@section('content')
<!-- This page displays all the available posts -->

<div class="d-flex justify-content-between" id="new-post">
    <h1>Posts Collection</h1>
    <a href="/posts/create" class="button-with-shadow">Add New Post</a>


</div>
<!-- displays posts -->
@if(count($posts) > 0)
<div class="cardBody">
    @foreach($posts as $post)

    <div class="cardIndex card1">
        <div class="preview">
            <h1>{{$post->created_at->format('d')}}</h1>
            <h3>{{$post->created_at->format('m-Y')}}</h3>

        </div>
        <div class="card-content">
            <div class="card-image">
                @if ($post->image)
                <img src="{{ asset('storage/'.$post->image) }}" alt="Post Image" class="cardImage">
                @endif
            </div>
            <!-- displays feelings -->
            <div class="card-tags">
                <span class="tag">
                    @if ($post->feeling == 1)
                    {!! '&#128557;' !!}
                    @elseif ($post->feeling == 2)
                    {!! '&#128528;' !!}
                    @elseif ($post->feeling == 3)
                    {!! '&#128522;' !!}
                    @elseif ($post->feeling == 4)
                    {!! '&#128513;' !!}
                    @elseif ($post->feeling == 5)
                    {!! '&#128525;' !!}
                    @endif</span>
                <span class="tag">{{$post->quality_score}}</span>
            </div>
            <h3>{{$post->title}}</h3>
            <!-- only display first 100 characters in what happened today (body) field -->
            <p>{{ Str::limit($post->body, 100) }}</p>
            <!-- navigate to view the full details of the post -->
            <div class="read-more">
                <a class="button-with-shadow" id="read-more" href="/posts/{{$post->id}}">Read More</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@else
@endif
@endsection