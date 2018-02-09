<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles_categorie;

class AboutController extends Controller
{
    public function about()
    {
        $categories = Articles_categorie::all();
        
        return view('about')->with([
            'categories' => $categories
        ]);
    }
}
