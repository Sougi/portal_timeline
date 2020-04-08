@extends('layout')

@section('content')

<form action="{{route('posts.store')}}" method="POST">
    @csrf
    <div>
        <label for="title">your title</label>
        <input name="title" id="title" type="text">
    </div>
    <div>
        <label for="content">your content</label>
        <input name="content" id="content" type="text">
    </div>
    <div>
        <label for="slug">slug</label>
        <input name="slug" id="slug" type="text">
    </div>

    <div>
        <label for="active">active</label>
        <input name="active" id="active" type="text">
    </div>
   
    <div>
        <label for="body">your body</label>
        <input name="body" id="body" type="text">
    </div>

    <button type="submit">Add post</button>
</form>

    
@endsection