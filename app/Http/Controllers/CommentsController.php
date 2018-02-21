<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Post;
use App\Comment;


class CommentsController extends Controller
{
    
    public function __construct()
    {
        //$this->middleware('');
    }
    
    public function store($category_url, Post $post_url)
    {
        $this -> validate(request(), ['text' => 'required|min:10|max:255']);
        
        if( !Auth::user() )
        {
            return back()->withErrors([
                'message' => 'You must be signed in.'
            ]);
        }
        else
        {
            $post_url -> addComment(request('text'), Auth::user()->id);
        }
        
        return back();
    }
}
