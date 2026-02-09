<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'subject' => 'nullable|string|max:255',
            'message' => 'required',
        ]);

        // Replace with your actual company email
        Mail::to('support@jvntechnologies.org')->send(new ContactMail($data));

        return back()->with('success', 'Thank you for reaching out! We will get back to you shortly.');
    }
}
