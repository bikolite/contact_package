<?php

namespace Bikolite\Contact\Http\Controllers;
use App\Http\Controllers\Controller;
use Bikolite\Contact\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Bikolite\Contact\Mail\ContactMailable;

class ContactController extends Controller
{
    public function index(){
        return view('contact::contact');
    }
    public function sand(Request $request){ 
        Mail::to('mohammad.naeemislam.info@gmail.com')->send(new ContactMailable($request->message, $request->name));


        Contact::create($request->all());
        return redirect(route('contact')); 
    }
}
