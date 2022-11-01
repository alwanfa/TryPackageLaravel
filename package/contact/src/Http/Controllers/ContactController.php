<?php

namespace Wandev\Contact\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;
use Wandev\Contact\Mail\MailContact;
use Wandev\Contact\Models\Contact;

class ContactController extends Controller
{
     public function display()
    {
        return view('contact::contact');
    }
    public function store(Request $req)
    {
        Contact::create($req->all());
        Mail::to("alwanfauzulazhim15@gmail.com")->send(new MailContact($req->message, $req->name, $req->email));
        return redirect('contact');
    }
    
}
