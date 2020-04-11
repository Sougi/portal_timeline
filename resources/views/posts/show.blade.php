@extends('layout') 
@section('content')
<a class="btn btn-primary ml-6" href="{{route('posts.index') }}">back</a>
<h1 class="text-center">{{ $post->title }}</h1>
<p>{{$post->content}}</p>
<p>{{$post->slug}}</p>
<p>status : {{$post->active}}</p>
<small>{{$post->created_at->diffForHumans()}}</small>

@endsection