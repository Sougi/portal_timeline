<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="{{mix('/css/app.css')}}">
    <title>Document</title>
</head>
<body>
@if(session()->has('status')) 
   <h2 style="color:greenyellow">
{{session()->get('status')}}
   </h2>
@endif


<ul>
<li><a href="{{route('home')}}">home</a></li>
<li><a href="{{route('about')}}">about</a></li>
<li><a href="{{route('posts.create')}}">add new posts</a></li>
<li><a href="{{route('posts.index')}}">our posts</a></li>

</ul>

@yield('content')

<script src="{{mix('/js/app.js')}}"></script>
</body>
</html>