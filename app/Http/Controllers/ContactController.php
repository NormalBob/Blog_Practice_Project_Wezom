<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Categorie;

use App\Mail\ContactEmail;

use App\Http\Requests\ContactFormRequest;

class ContactController extends Controller
{
    public function index()
    {
        $categories = Categorie::all();
        
        return view('contact')->with([
            'categories' => $categories
        ]);
    }
    
    public function store(ContactFormRequest $request)
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
