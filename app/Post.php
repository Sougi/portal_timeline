<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title' , 'content' , 'slug' , 'active' , 'body'] ; 
    
    
    public function comment()
    {
        return $this->hasMany('App\Comment');
    }
}
