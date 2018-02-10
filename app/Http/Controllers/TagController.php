<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles_categorie;
use App\Tag;

class TagController extends Controller
{
    public function index(Tag $tag_url)
    {
        $categories = Articles_categorie::all();
        
        //$articles = Article::select(['id', 'title', 'text', 'category_id', 'url_title'])->where('id', $cat_id)->get();
        $articles = $tag_url -> articles() 
            ->orderBy('id', 'desc')
            ->paginate(6);
        
        return view('tag')->with([
            'articles' => $articles,
            'categories' => $categories,
            'tag' => $tag_url
        ]);
    }
}
