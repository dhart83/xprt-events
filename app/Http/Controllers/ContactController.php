<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Validation rules (customize as needed)
        $rules = [
            'fname' => 'required|alpha|max:255',
            'lname' => 'required|alpha|max:255',
            'phone' => 'required|regex:/^[0-9\+\-\(\)]+$/|max:20',
            'ext' => 'max:10',
            'email' => 'required|email|max:255',
            'event' => 'required|max:255',
            'body' => 'required|max:1000',
            'date' => 'required|date|date_format:Y-m-d|after_or_equal:today',
            'budget' => 'required|in:$500 - $1000,$1000 - $1500,$1500 - $2000,Cost is not a concern',
        ];

        // Validate the request data
        $validated = $request->validate($rules);

        // Send an email, store data, or perform other actions here
        // You can use the data from $request->input('name'), $request->input('email'), and $request->input('body')

        Mail::to(users: env('MAIL_FROM_ADDRESS'))->send(new ContactMail(
            $request->input('fname'),
            $request->input('lname'),
            $request->input('phone'),
            $request->input('ext'),
            $request->input('email'),
            $request->input('event'),
            $request->input('body'),
            $request->input('date'),
            $request->input('budget')
        ));

        // Redirect back with a success message
        return ['success' => true];
        return redirect()->route('home')->with('success', 'Your message has been sent successfully!');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('contact');
    }
}
