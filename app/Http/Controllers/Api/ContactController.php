<?php

namespace App\Http\Controllers\Api;

use App\Events\ContactFormSubmitted;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Rules\ReCaptcha;
use Illuminate\Http\Request;

class ContactController extends Controller
{
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
            return successResponse("Thank you for contacting us. We will respond as soon as possible.");
        }
        return errorResponse("Something went wrong!", 500);
    }
}
