@extends('layout')

@section('content')

<form action="{{route('posts.update' , ['post'=>$post->id])}}" method="POST">
    @csrf
    @method('PUT')
        <!---affichage des errors-->
    @if($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
         <li style='color:red'>{{$error}}</li>
        @endforeach
    
    </ul>
    

    @endif

@include('posts.form')

    <button type="submit">Edit post</button>
</form>

    
@endsection