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
            'full_name' => 'required|min:2',
            'telephone' => 'requiredregex:/(+38)[0-9]{9}/',
            'email' => 'required|email',
            'message' => 'required|min:10'
        ]);
        
        return redirect('/contact');
    }
}
