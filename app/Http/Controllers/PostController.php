<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles_categorie;
use App\Article;

class PostController extends Controller
{
    public function post ($category_url, $url_title)
    {
        $categories = Articles_categorie::all();
        $article = Article::where('url_title', $url_title)->first();;
        //dump();
        return view('post')->with([
            'categories' => $categories,
            'article' => $article
        ]);
    }
}
