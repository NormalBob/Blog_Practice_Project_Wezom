<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Categorie;

class CategoryController extends Controller
{
    public function index($category_url)
    {
        $categories = Categorie::all();
        foreach($categories as $cat)
        {
            if($category_url == $cat['slug'])
            {
                $cat_id = $cat['id'];
                $cat_name = $cat['name'];
            }
        }
        $posts = Post::select(['id', 'title', 'body', 'category_id', 'excerpt', 'image', 'slug'])
            ->where('category_id', $cat_id)
            ->orderBy('id', 'desc')
            ->paginate(6);
        
        //dump($categories);
        
        return view('category')->with([
            'posts' => $posts,
            'categories' => $categories,
            'category_name' => $cat_name,
            'category_url' => $category_url
        ]);
    }
}
