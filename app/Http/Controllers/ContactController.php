<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles_categorie;
use App\Mail\ContactEmail;
use App\Http\Requests\ContactFormRequest;

class ContactController extends Controller
{
    public function index()
    {
        $categories = Articles_categorie::all();
        
        return view('contact')->with([
            'categories' => $categories
        ]);
    }
    
    public function store(Request $request)
    {      
        $contact = [];

        $contact['full_name'] = $request->get('full_name');
        $contact['telephone'] = $request->get('telephone');
        $contact['email'] = $request->get('email');
        $contact['message'] = $request->get('message');

        \Mail::to(config('mail.from.address'))->send(new ContactEmail($contact));
        
        return redirect('/contact');
    }
}
