<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Categorie;

class IndexController extends Controller
{
    public function index()
    {
        $posts = Post::select(['id', 'title', 'body', 'category_id', 'excerpt', 'image', 'slug'])->orderBy('id','desc')->paginate(6);
        $categories = Categorie::all();

        return view('home')->with([
            'posts' => $posts,
            'categories' => $categories
        ]);
    }   
}
