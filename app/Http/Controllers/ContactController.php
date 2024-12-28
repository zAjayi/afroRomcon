<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    // public function show()
    //     {
    //         return view("contact");
    //     }
    //Contact form function
    public function send(Request $request)
    {
        $request->validate([
            "name" => "required|string|max:255",
            "email" => "required|email",
            "message" => "required|string",
        ]);

        $details = [
            "name" => $request->name,
            "email" => $request->email,
            "message" => $request->message,
        ];

        Mail::to("afro.romcon@gmail.com")->send(new \App\Mail\ContactMail($details));

        return back()->with("Success", "Your message has been sent!");
    }
}
