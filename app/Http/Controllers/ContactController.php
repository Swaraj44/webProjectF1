<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Auth;


class ContactController extends Controller
{
    //
    public function create()
    {
        return view('contact_us');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'Name' => 'required',
            'Email' => 'required|email',
            'Subject' => 'required',
            'Message' => 'required',
        ]);



        Contact::create($validatedData);
       

        return redirect()->route('contact.show');
    }

    public function show()
    {
        $contacts = Contact::all();

        return view('message', compact('contacts'));
    }
}
