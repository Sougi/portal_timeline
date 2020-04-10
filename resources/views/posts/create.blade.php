@extends('layout')

@section('content')

<form action="{{route('posts.store')}}" method="POST">
    @csrf
        <!---affichage des errors-->
    @if($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
         <li style='color:red'>{{$error}}</li>
        @endforeach
    
    </ul>
    

    @endif


    @include('posts.form')


    <button type="submit">Add post</button>
</form>

    
@endsection