<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles_categorie;
use App\Article;
use App\Tag;

class PostController extends Controller
{
    public function __construct()
    {
        //$this->middlware('auth');
    }
    
    public function index ($category_url, Article $post_url)
    {
        $categories = Articles_categorie::all();
        $article = Article::where('url', $post_url['url'])->first();
        
        $tags = $post_url -> tags;
        
        //dump($tags);
        return view('post')->with([
            'categories' => $categories,
            'category_url' => $category_url,
            'article' => $article,
            'tags' => $tags
        ]);
    }
}
