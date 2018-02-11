<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;
use App\Comment;

class CommentsController extends Controller
{
    public function store($category_url, Article $post_url)
    {
        $this -> validate(request(), ['text' => 'required|min:2']);
        
        $post_url -> addComment(request('text'));
        return back();
    }
}
