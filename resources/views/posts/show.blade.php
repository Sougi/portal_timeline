@extends('layout') 
@section('content')
<a href="{{route('posts.index') }}">back</a>
<h1>{{ $post->title }}</h1>
<p>{{$post->content}}</p>
<p>{{$post->slug}}</p>
<p>status : {{$post->active}}</p>
<small>{{$post->created_at->diffForHumans()}}</small>
@endsection