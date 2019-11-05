<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Session;

class ContactController extends Controller
{
    public function storeContact(Request $request)
    {
        $this->validate($request, [
            
            'name' => 'required',
            'email' => 'required|email',
            'title' => 'required',
            'body' => 'required',
        ]);
        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->title = $request->title;
        $contact->body = $request->body;
        $contact->save();

        Session::flash('success','Thank you contact us, we will back to you soon!');
        return redirect()->back();
    }
}
