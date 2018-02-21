<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;

class AboutController extends Controller
{
    public function index()
    {
        $categories = Categorie::all();
        
        return view('about')->with([
            'categories' => $categories
        ]);
    }
}
