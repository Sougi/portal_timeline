@extends('layout') 


@section('content')


    <h1>Our Posts</h1> 
    <div class="container">
    <table class="table">
    <tr>
        <th scope="col"><strong>title</strong></th>
        <th scope="col"><strong>content</strong></th>
        <th scope="col"><strong>slug</strong></th>
        <th scope="col"><strong>active</strong></th>
        <th scope="col"><strong>body</strong></th>
        <th scope="col"><strong>created_at</strong></th>
        <th scope="col"><strong>Nombre des Commentaires</strong></th>

        <th scope="col">Action</th>
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
        @if($post->comment_count)
         <th class="badge badge-success mx-5 my-2">{{$post->comment_count}}</th>
         @else 
         <th class="badge badge-danger mx-4 my-2">No Comments Yet</th>
         @endif
        
        
        
        <th><a href="{{route('posts.edit', ['post' => $post->id])}}" class="btn btn-info">edit post</a>
        
    <form class="form-inline" style=" display: inline" action="{{route('posts.destroy',['post'=>$post->id])}}" method="POST">
            @csrf 
            @method('DELETE')
            <input type="submit" value="delete" class="btn btn-danger">
    </form>
        </span>

        </th>

    </tr>

    @empty
        <span class="badge badge-danger">Not Posts</span>
    @endforelse
    </table>
</div>
@endsection

