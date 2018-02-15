<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Articles_categorie;

class IndexController extends Controller
{
    public function index()
    {
        $articles = Article::select(['id', 'title', 'text', 'category_id', 'url', 'img'])->orderBy('id','desc')->paginate(6);
        $categories = Articles_categorie::all();

        return view('home')->with([
            'articles' => $articles,
            'categories' => $categories
        ]);
    }   
}
