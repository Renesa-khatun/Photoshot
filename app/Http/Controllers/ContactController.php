<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use MongoDB\Driver\Session;

class ContactController extends Controller
{

    public function index(){
        $contact = Contact::all();
        return view('messages.message',['contact'=>$contact]);
    }


    public function store(){

        \request()->validate([
            'name' => 'required',
            'email' => ['required','email'],
            'message' => 'required'
        ]);

        Contact::create(\request()->all());
        \session()->flash('message','Message Successfully Sent');
        return redirect()->back();
    }

    public function delete(Contact $id){
        $id->delete();
        return redirect()->back();
    }
}
