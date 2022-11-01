<?php

namespace Wandev\Contact\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ContactController extends Controller
{
     public function display()
    {
        return view('contact::contact');
    }
    public function store(Request $req)
    {
        return $req->all();
    }
    
}
