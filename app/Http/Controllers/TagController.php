<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Articles_categorie;
use App\Articles_tag;
use App\Tag;

class TagController extends Controller
{
    public function tag($tag_url)
    {
        $categories = Articles_categorie::all();
        $tag_id = Tag::select(['id'])->where('tag_url', $tag_url)->first();
        
        
        $articles = Article::select(['id', 'title', 'text', 'category_id', 'url_title'])->where('id', $cat_id)->get();
        
        //dump($categories);
        
        return view('category')->with([
            'articles' => $articles,
            'categories' => $categories,
            'category_name' => $cat_name,
            'category_url' => $category_url
        ]);
    }
}
