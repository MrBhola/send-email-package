<?php

namespace Mrbhola\Contact\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Mrbhola\Contact\Mail\ContactMail;
use Mrbhola\Contact\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact_form');
    }
    
    public function send(Request $request)
    {
        $data = $request;
        $data->name = $request->name;
        $data->mesage = $request->mesage;
        Mail::to(config('contact.send_mail_to'))->send(new ContactMail($data));
        Contact::create($request->all());
        // session()->flash('news mesage');
        return redirect()->back()->with('status', 'Profile updated!');
    }
}
