@extends('layout')

@section('content')

<h1>Edit Post</h1>
<form action="{{route('posts.update' , ['post'=>$post->id])}}" method="POST">
    @csrf
    @method('PUT')
        <!---affichage des errors-->
    @if($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
       <div class="alert alert-danger" role="alert"> 
        {{$error}}
       </div>
       
        @endforeach
    
    </ul>
    

    @endif

@include('posts.form')

    <button type="submit" class="btn btn-warning">Edit post</button>
</form>

    
@endsection