@extends('layout') 


@section('content')


    <h1>Our Posts</h1> 

    <table>
    <tr>
        <th><strong>title</strong></th>
        <th><strong>content</strong></th>
        <th><strong>slug</strong></th>
        <th><strong>active</strong></th>
        <th><strong>body</strong></th>
        <th><strong>created_at</strong></th>
        <th>soso</th>
    </tr>

   
    @forelse ($posts as $post)
        <tr>     
       
    <th><a href="{{route('posts.show',['post'=>$post->id])}}">{{$post->title}}</a></th>
        <th>{{$post->content}}</th>
        <th>{{$post->slug}}</th>
        <th>    
            @if($post->active) 
            Enabled
            @else
            Disabled
            @endif 
        </th>
        <th>{{$post->body}}</th>
        <th>{{$post->created_at->diffForHumans()}}</th>
        <th><a href="{{route('posts.edit', ['post' => $post->id])}}">edit post</a>
        
       <span> <form action="{{route('posts.destroy',['post'=>$post->id])}}" method="POST">
            @csrf 
            @method('DELETE')
            <input type="submit" value="delete">
            </form>
        </span>

        </th>

    </tr>

    @empty
        <p>Not Posts</p>
   
    @endforelse
    </table>
@endsection

