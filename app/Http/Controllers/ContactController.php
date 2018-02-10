<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles_categorie;

class ContactController extends Controller
{
    public function index()
    {
        $categories = Articles_categorie::all();
        
        return view('contact')->with([
            'categories' => $categories
        ]);
    }
    
    public function store()
    {
        $this->validate(request(), [
            'full_name' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);
        
        return redirect('/contact');
    }
}
