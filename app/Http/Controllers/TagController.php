<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;
use App\Tag;
use App\Post;

class TagController extends Controller
{
    public function index(Tag $tag_url)
    {
        $categories = Categorie::all();
        
        //$posts = Post::select(['id', 'title', 'text', 'category_id', 'url_title'])->where('id', $cat_id)->get();
        $posts = $tag_url -> posts() 
            ->orderBy('id', 'desc')
            ->paginate(6);
        
        return view('tag')->with([
            'posts' => $posts,
            'categories' => $categories,
            'tag' => $tag_url
        ]);
    }
}
