@extends('layout')

@section('content')
    <article>
        <h1> {!! $post->title !!} </h1>
    </article>

    <div>
        {!! $post->body !!}
    </div>

    <a href="/">Go Back</a>
    
@endsection