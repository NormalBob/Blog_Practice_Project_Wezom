<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles_categorie;

class ContactController extends Controller
{
    public function contact()
    {
        $categories = Articles_categorie::all();
        
        return view('contact')->with([
            'categories' => $categories
        ]);
    }
}
