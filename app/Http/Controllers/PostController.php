<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePost;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('posts.index',[
            'posts' =>Post::all()
            // 'posts' => []
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create') ; 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePost $request)
    {
//validate les data // in StorePost is a request class created by me
        //    $validateData =  $request->validate([
        //         'title'=> 'required|min:4|max:10' , 
        //         'content' =>'required' , 
        //         'slug' =>'required' , 
        //         'active'=>'required'
        //     ]);

     //   dd($request->all()) ; //for received all data
    // $post = new Post() ; 

    //  $post->title = $request->input('title'); 
    //  $post->content = $request->input('content') ; 
    //  $post->slug = $request->input('slug'); 
    //  $post->active = $request->input('active') ; 
    //  $post->body = $request->input('body'); 

     //$post->slug = Str::slug($post->title , '-') ; 
  // $post->save();



  $post = Post::create($request->only(['title' , 'content' , 'slug' , 'active' , 'body'])) ; 

    
     $request->session()->flash('status' , 'bien ajouter!!') ; 
     return redirect()->route('posts.index'); 
     

    // dd('your title is : '. $title , 'your content is ' .$content) ; 
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('posts.show',[
            'post' =>Post::find($id)
        ]) ; 


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id) ; 
        return view('posts.edit' , [
            'post'=>$post
        ]) ; 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePost $request, $id)
    {
       $post= Post::findOrFail($id) ; 
        $post->title = $request->input('title') ; 
        $post->content = $request->input('content') ; 
        $post->slug = $request->input('slug') ; 
        $post->active = $request->input('active') ; 
        $post->body = $request->input('body') ; 
        $post->save();

    $request->session()->flash('status' , 'bien Modifier!!') ; 
     return redirect()->route('posts.index'); 



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request , $id)
    {
    //     $post = Post::findOrFail($id);
    //     $post ->delete();
        Post::destroy($id);
        $request->session()->flash('status' , 'bien Suprimer!!') ; 
        return redirect()->route('posts.index'); 
       
    }
}
