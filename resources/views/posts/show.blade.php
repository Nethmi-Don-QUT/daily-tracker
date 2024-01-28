@extends('layouts.app')
@section('content')
<!-- Display full information of a selected post -->
<!-- only available for authenticated users -->
@if(!Auth::guest())
@if(Auth::user()->id == $post->user_id)
<a href="/posts" class="btn button-with-shadow"> Go Back </a>
<h1>{{$post->created_at->format('Y-m-d')}} </h1>
<p>Today's caption: {{$post->title}}</p>
<p>Today's Memo: {{$post->body}}</p>
<p>Creative Time Log: {{$post->spent_hours}} hours</p>
<p>Quality score for the day: {{$post->quality_score}}</p>
<!-- display feelings according to the selected number  -->
<p> Today's Emotional State:
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
    @endif</p>

<!-- display image, if available -->
@if ($post->image)
<p>Snapshot of the Day</p>
<img src="{{ asset('storage/'.$post->image) }}" alt="Post Image">
@endif
<hr>
<!-- display the exact time the post was created -->
<small>Written on {{$post->created_at}}</small>
<hr>
<!-- navigate to the edit page  -->
<a href="/posts/{{$post->id}}/edit" class="btn button-with-shadow">Edit</a>
{!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'POST', 'class'=>'pull-right']) !!}
<!-- Delete the post -->
{{Form::hidden('_method', 'DELETE')}}
{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
{!! Form::close() !!}
@endif
@endif
@endsection