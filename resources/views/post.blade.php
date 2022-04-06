@extends('layout')

@section('content')
    <article>
        <h1> {!! $post->title !!} </h1>
    </article>

    <p> By <a href="/users/{{$post->user->id}}"> {{$post->user->name}} </a> in <a href="/categories/{{ $post->category->slug  }}"> {!! $post->category->name !!} </a> </p>

    <div>
        {!! $post->body !!}
    </div>

    <a href="/">Go Back</a>
    
@endsection