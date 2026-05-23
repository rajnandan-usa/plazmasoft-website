<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Mail\ContactAdminNotification;
use App\Mail\ContactAutoReply;
use App\Mail\NewsletterConfirmation;
use App\Models\ContactSubmission;
use App\Models\NewsletterSubscriber;
use App\Rules\ReCaptcha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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
            'name'                  => ['required', 'string', 'max:120'],
            'email'                 => ['required', 'email', 'max:255'],
            'phone'                 => ['nullable', 'string', 'max:30'],
            'company'               => ['nullable', 'string', 'max:120'],
            'project_type'          => ['required', 'string'],
            'budget_range'          => ['required', 'string'],
            'message'               => ['required', 'string', 'min:20', 'max:2000'],
            'website'               => ['nullable', 'max:0'],  // honeypot
            'g_recaptcha_response'  => ['nullable', 'string', new ReCaptcha()],
        ]);

        if (!empty($validated['website'])) {
            return redirect()->route('thank-you');
        }

        $submission = ContactSubmission::create([
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
            'open_token'   => Str::random(64),
        ]);

        $adminEmail = setting('email_sales', config('mail.from.address'));

        try {
            Mail::to($adminEmail)->send(new ContactAdminNotification($submission));
        } catch (\Throwable) {
            // Admin mail failure must not block the user
        }

        try {
            Mail::to($submission->email)->send(new ContactAutoReply($submission));
            $submission->update(['autoreply_sent_at' => now()]);
        } catch (\Throwable) {
            // Autoreply failure must not block the user redirect
        }

        return redirect()->route('thank-you');
    }

    public function trackEmailOpen(string $token)
    {
        $submission = ContactSubmission::where('open_token', $token)->first();

        if ($submission) {
            $submission->increment('email_open_count');
            if (is_null($submission->email_opened_at)) {
                $submission->update(['email_opened_at' => now()]);
            }
        }

        $gif = base64_decode('R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7');

        return response($gif, 200, [
            'Content-Type'  => 'image/gif',
            'Cache-Control' => 'no-cache, no-store, must-revalidate',
            'Pragma'        => 'no-cache',
            'Expires'       => '0',
        ]);
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
            $subscriber = NewsletterSubscriber::create([
                'email'  => $request->email,
                'source' => $request->headers->get('referer', 'footer'),
                'token'  => Str::random(64),
            ]);

            try {
                Mail::to($subscriber->email)->send(new NewsletterConfirmation($subscriber));
            } catch (\Throwable) {
                // Mail failure must not block the response
            }
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
