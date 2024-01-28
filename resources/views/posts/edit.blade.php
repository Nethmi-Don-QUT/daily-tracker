@extends('layouts.app')
@section('content')

<!-- Edit posts  -->

<!-- only authenticated users can access this page -->
@if(!Auth::guest())
@if(Auth::user()->id == $post->user_id)

<a href="/posts" class="btn button-with-shadow"> Go Back </a>
<h1>Edit Post</h1>
<!-- form to edit an existing form -->
{!! Form::open(['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
<!-- field to edit caption -->
<div class="form-group">
    {{Form::label('title', 'Caption', ['class' => 'create-label'])}}
    {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Write a quick caption for today.'] )}}
</div>
<!-- field to edit what happened today -->
<div class="form-group">
    {{Form::label('body', "Today's Memo", ['class' => 'create-label'])}}
    {{Form::textarea('body', $post->body, ['class' => 'form-control', 'placeholder' =>  'A note of what happened this day'] )}}
</div>
<!-- field to edit creative hours -->
<div class="form-group">
    {{Form::label('spent_hours', 'Creative Time Log', ['class' => 'create-label'])}}
    {{Form::text('spent_hours', $post->spent_hours, ['class' => 'form-control', 'placeholder' => 'How many hours spent doing creative work? ex: 7, 8.15'] )}}
</div>
<!-- field to edit quality score -->
<div class="form-group">
    {{ Form::label('quality_score', 'Quality score for the day', ['class' => 'create-label']) }}
    {{ Form::input('range', 'quality_score', $post->quality_score, ['class' => 'form-control', 'min' => -2, 'max' => 2, 'step' => 1, 'oninput' => 'updateQualityScore()']) }}
    <p class="create-label">Selected Quality Score: <span id="displayScore">0</span></p>
</div>
<!-- field to edit feelings -->
<div class="form-group">
    {{ Form::label('feeling', 'Feeling', ['class' => 'form-label']) }}
    {{ Form::input('range', 'feeling', $post->feeling, ['class' => 'form-range', 'min' => 1, 'max' => 5, 'step' => 1, 'oninput' => 'updateFeelings()']) }}
    <p class="create-label" >Selected Feelings: <span id="displayFeelings">&#128512;</span></p>
</div>
<!-- field to upload an image -->
<div class="form-group">
    {!! Form::label('image', 'Upload The Best Memory: ', ['class' => 'create-label']) !!}
    {!! Form::file('image', ['class' => 'form-control-file']) !!}
    <br><small>less than 1.9MB</small>
</div>
<!-- submit the form -->
{{Form::hidden('_method', 'PUT')}}
{{Form::submit('Submit', ['class' => 'btn button-with-shadow'])}}
{!! Form::close() !!}
@endif
@endif
@endsection