<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\ContactSubmission;
use App\Models\NewsletterSubscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'         => ['required', 'string', 'max:120'],
            'email'        => ['required', 'email', 'max:255'],
            'phone'        => ['nullable', 'string', 'max:30'],
            'company'      => ['nullable', 'string', 'max:120'],
            'project_type' => ['required', 'string'],
            'budget_range' => ['required', 'string'],
            'message'      => ['required', 'string', 'min:20', 'max:2000'],
            'website'      => ['nullable', 'max:0'],  // honeypot
        ]);

        if (!empty($validated['website'])) {
            return redirect()->route('thank-you');
        }

        ContactSubmission::create([
            'name'         => $validated['name'],
            'email'        => $validated['email'],
            'phone'        => $validated['phone'] ?? null,
            'company'      => $validated['company'] ?? null,
            'project_type' => $validated['project_type'],
            'budget_range' => $validated['budget_range'],
            'message'      => $validated['message'],
            'source'       => $request->headers->get('referer', ''),
            'source_url'   => $request->headers->get('referer', ''),
            'ip_address'   => $request->ip(),
            'user_agent'   => $request->userAgent(),
            'status'       => 'new',
        ]);

        return redirect()->route('thank-you');
    }

    public function newsletterSubscribe(Request $request)
    {
        $request->validate([
            'email'   => ['required', 'email', 'max:255'],
            'website' => ['nullable', 'max:0'],  // honeypot
        ]);

        if (!empty($request->website)) {
            return back()->with('newsletter_success', true);
        }

        $existing = NewsletterSubscriber::where('email', $request->email)->first();

        if (!$existing) {
            NewsletterSubscriber::create([
                'email'  => $request->email,
                'source' => $request->headers->get('referer', 'footer'),
                'token'  => Str::random(64),
            ]);
        }

        return back()->with('newsletter_success', true);
    }

    public function newsletterConfirm(string $token)
    {
        $subscriber = NewsletterSubscriber::where('token', $token)->firstOrFail();
        $subscriber->update(['is_confirmed' => true, 'confirmed_at' => now()]);

        return redirect('/')->with('newsletter_confirmed', true);
    }

    public function newsletterUnsubscribe(string $token)
    {
        $subscriber = NewsletterSubscriber::where('token', $token)->firstOrFail();
        $subscriber->update(['unsubscribed_at' => now()]);

        return redirect('/')->with('newsletter_unsubscribed', true);
    }
}
