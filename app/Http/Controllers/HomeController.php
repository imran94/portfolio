<?php

namespace App\Http\Controllers;

use App\Mail\ContactReceived;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{

    public function index()
    {
        return view('welcome');
    }

    public function contact(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email'
        ]);

        $contact = new Contact([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message') ?? ''
        ]);
        $contact->save();

        Mail::to('iraja094@gmail.com')->send(new ContactReceived($contact));

        return redirect()->route('index')
            ->with('status', 'Request received. Thank you for reaching out!');
    }
}
