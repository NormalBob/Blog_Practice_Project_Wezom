<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles_categorie;
use App\Article;
use App\Tag;

class PostController extends Controller
{
    public function index ($category_url, Article $url)
    {
        $categories = Articles_categorie::all();
        $article = Article::where('url', $url['url'])->first();
        
        $tags = $url -> tags;
        
        //dump($tags);
        return view('post')->with([
            'categories' => $categories,
            'article' => $article,
            'tags' => $tags
        ]);
    }
}
