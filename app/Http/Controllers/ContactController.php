<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Alert;

class ContactController extends Controller
{
    public function index()
    {
        return view('frontend.contact');
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'contact' => $request->contact,
            'message' => $request->message,
        ];

        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new ContactMail($data));

        Client::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->contact,
            'message' => $request->message,
        ]);

        Alert::success("Request Received Successfully!!", "We have received your request. Soon our expert will contact you.");

        return redirect()->back();

    }

}
