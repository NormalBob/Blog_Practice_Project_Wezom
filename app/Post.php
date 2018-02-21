<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
    
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function addComment($text, $id)
    {
       // $this -> comments() -> create(['text' => $text, 'user_id' => '1']);
        
        Comment::create([
            'post_id' => $this -> id,
            'user_id' => $id, 
            'text' => $text            
        ]);
    }
    
    public function category()
    {
        return $this->hasMany('App\Categorie');
    }
    
    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
    
    public function user()
    {
        return $this->belongsToMany('App\User');
    }
    
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
