<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    
    
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function addComment($text)
    {
       // $this -> comments() -> create(['text' => $text, 'user_id' => '1']);
        
        Comment::create([
            'article_id' => $this -> id,
            'user_id' => 1,
            'text' => $text            
        ]);
    }
    
    public function category()
    {
        return $this->hasMany('App\Articles_categorie');
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
        return 'url';
    }
}
