<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;
use App\Post;
use App\Tag;
use App\Comments;

class PostController extends Controller
{
    public function __construct()
    {
        //$this->middlware('auth');
    }
    
    public function index ($category_url, Post $post_url)
    {
        $categories = Categorie::all();
        
        $post = Post::where('slug', $post_url['slug'])->first();
        
        $comments = $post_url -> comments() -> orderBy('id', 'desc') -> paginate();
        
        $tags = $post_url -> tags;
        
        //dump($comments);
        return view('post')->with([
            'categories' => $categories,
            'category_url' => $category_url,
            'post' => $post,
            'tags' => $tags,
            'comments' => $comments,
        ]);
    }
}
