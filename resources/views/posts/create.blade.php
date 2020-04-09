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


    <div>
        <label for="title">your title</label>
        <input name="title" id="title" type="text" value="{{old('title')}}">
    </div>
    <div>
        <label for="content">your content</label>
        <input name="content" id="content" type="text" value="{{old('content')}}">
    </div>
    <div>
        <label for="slug">slug</label>
        <input name="slug" id="slug" type="text" value="{{old('slug')}}">
    </div>

    <div>
        <label for="active">active</label>
        <input name="active" id="active" type="text" value="{{old('active')}}">
    </div>
   
    <div>
        <label for="body">your body</label>
        <input name="body" id="body" type="text" value="{{old('body')}}">
    </div>

    <button type="submit">Add post</button>
</form>

    
@endsection