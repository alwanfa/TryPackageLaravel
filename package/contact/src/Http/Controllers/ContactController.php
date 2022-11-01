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
        $data = ['name'=>$req->name,'email'=>$req->email,'subject'=>$req->subject,'message'=>$req->message];
        Contact::create($data);
        Mail::to("alwanfauzulazhim15@gmail.com")->send(new MailContact($req->message, $req->name, $req->email));
        return redirect('contact');
    }
    
}
