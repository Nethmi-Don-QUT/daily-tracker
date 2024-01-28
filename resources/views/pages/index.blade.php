@extends('layouts.app')

@section('content')

<!-- Displays the home page -->
<div class="body_session">
        <h1>{{$title}}</h1>
        <h3 id="paragraph">Daily Experience Tracker invites you to savor the moments of your life. Capture your favorite memory each day, jot down
                insightful reflections, share a picture that encapsulates the essence, and express your feelings through captions and emotions.
                A simple, intuitive platform for recording the highlights of your day, fostering self-awareness, and creating a personalized tapestry
                of memories. Start each day with a moment of reflection, and let Daily Experience Tracker be your companion on the journey of daily
                discovery.
        </h3>
        <a href="/posts" class="btn button-with-shadow"> Your Personal Blog >></a>
</div>

@endsection