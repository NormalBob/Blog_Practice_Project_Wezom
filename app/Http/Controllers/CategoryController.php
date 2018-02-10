<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Articles_categorie;

class CategoryController extends Controller
{
    public function index($category_url)
    {
        $categories = Articles_categorie::all();
        foreach($categories as $cat)
        {
            if($category_url == $cat['url'])
            {
                $cat_id = $cat['id'];
                $cat_name = $cat['category_name'];
            }
        }
        $articles = Article::select(['id', 'title', 'text', 'category_id', 'url'])
            ->where('category_id', $cat_id)
            ->orderBy('id', 'desc')
            ->paginate(6);
        
        //dump($categories);
        
        return view('category')->with([
            'articles' => $articles,
            'categories' => $categories,
            'category_name' => $cat_name,
            'category_url' => $category_url
        ]);
    }
}
