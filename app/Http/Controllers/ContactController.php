<?php

namespace App\Http\Controllers;

use App\Events\ContactFormSubmitted;
use App\Models\Contact;
use App\Rules\ReCaptcha;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
        return view("section.contact");
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'fullName' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phoneNumber' => 'required|string|max:15',
            'countryCode' => 'string',
            'subject' => 'nullable',
            'message' => 'required|string',
            'budget' => 'required',
            'g-recaptcha-response' => ['required', new ReCaptcha]
        ]);

        $validated['type'] = "proposal";
        $contact =  Contact::create($validated);

        // trigger event
        ContactFormSubmitted::dispatch($contact);

        if ($contact) {
            return back()->with("success", "Thank you for contacting us. We will respond as soon as possible.");
        }
        return back()->with("error", 'something went wrong');
    }
}
