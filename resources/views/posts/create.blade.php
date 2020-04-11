@extends('layout')

@section('content')
    <h1>New Post</h1>
<form action="{{route('posts.store')}}" method="POST">
    @csrf
        <!---affichage des errors-->
    @if($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
      <div class="alert alert-danger" role="alert"> {{$error}}</div>  
        @endforeach
    
    </ul>
    

    @endif


    @include('posts.form')


    <button type="submit" class="btn btn-primary">Add post</button>
</form>

    
@endsection