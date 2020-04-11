<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="{{mix('/css/app.css')}}">
<link rel="stylesheet" href="{{mix('/css/theme.css')}}">

    <title>Learning</title>
</head>
<body>


<nav class="navbar navbar-expand navbar-dark bg-danger">
    <ul class="nav navbar-nav">
        <li  class="nav-item"><a  class="nav-link ml-4" href="{{route('home')}}">home</a></li>
        <li class="nav-item"><a class="nav-link ml-4" href="{{route('about')}}">about</a></li>
        <li class="nav-item"><a class="nav-link ml-4" href="{{route('posts.create')}}">add new posts</a></li>
        <li class="nav-item"><a class="nav-link ml-4" href="{{route('posts.index')}}">our posts</a></li>
    </ul>
</nav>
<div class="container">

@if(session()->has('status')) 
<div class="alert alert-success" role="alert">
    {{session()->get('status')}}
  </div>
@endif

@yield('content')

</div>






<script src="{{mix('/js/app.js')}}"></script>
</body>
</html>