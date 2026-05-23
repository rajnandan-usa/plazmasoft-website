<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>We received your message</title>
<style>
  * { box-sizing: border-box; margin: 0; padding: 0; }
  body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; background: #0f0f0f; padding: 32px 16px; color: #e5e7eb; }
  .wrap { max-width: 580px; margin: 0 auto; }
  .card { background: #18181b; border: 1px solid #27272a; border-radius: 20px; overflow: hidden; }
  .header { background: linear-gradient(135deg, #111827 0%, #1c1917 100%); padding: 40px 40px 36px; border-bottom: 1px solid #27272a; position: relative; overflow: hidden; }
  .header::before { content: ''; position: absolute; top: -60px; right: -60px; width: 200px; height: 200px; border-radius: 50%; background: radial-gradient(circle, rgba(249,115,22,.18) 0%, transparent 70%); }
  .logo { display: inline-flex; align-items: center; gap: 10px; margin-bottom: 28px; }
  .logo-mark { width: 36px; height: 36px; border-radius: 10px; background: linear-gradient(135deg, #f97316, #ea580c); display: flex; align-items: center; justify-content: center; }
  .logo-mark svg { width: 20px; height: 20px; fill: white; }
  .logo-name { font-size: 18px; font-weight: 700; color: #f9fafb; letter-spacing: -.01em; }
  .header-title { font-size: 22px; font-weight: 700; color: #f9fafb; margin-bottom: 8px; }
  .header-sub { font-size: 14px; color: #9ca3af; line-height: 1.55; }
  .body { padding: 36px 40px; }
  .greeting { font-size: 15px; color: #d1d5db; margin-bottom: 16px; line-height: 1.6; }
  .summary-card { background: #111827; border: 1px solid #374151; border-radius: 14px; padding: 22px 24px; margin: 24px 0; }
  .summary-title { font-size: 10px; font-weight: 700; letter-spacing: .12em; text-transform: uppercase; color: #f97316; margin-bottom: 16px; }
  .summary-row { display: flex; gap: 12px; margin-bottom: 10px; font-size: 13.5px; }
  .summary-row:last-child { margin-bottom: 0; }
  .summary-label { font-weight: 600; color: #6b7280; min-width: 90px; flex-shrink: 0; }
  .summary-value { color: #e5e7eb; }
  .divider { height: 1px; background: #27272a; margin: 24px 0; }
  .body-text { font-size: 14px; color: #9ca3af; line-height: 1.7; margin-bottom: 16px; }
  .timeline { display: flex; flex-direction: column; gap: 14px; margin: 20px 0; }
  .tl-item { display: flex; gap: 14px; align-items: flex-start; }
  .tl-step { width: 28px; height: 28px; border-radius: 50%; background: rgba(249,115,22,.12); border: 1px solid rgba(249,115,22,.25); display: flex; align-items: center; justify-content: center; font-size: 11px; font-weight: 700; color: #f97316; flex-shrink: 0; }
  .tl-content { padding-top: 4px; }
  .tl-title { font-size: 13px; font-weight: 600; color: #e5e7eb; margin-bottom: 2px; }
  .tl-desc { font-size: 12px; color: #6b7280; line-height: 1.5; }
  .cta-wrap { text-align: center; margin: 28px 0 4px; }
  .cta-btn { display: inline-block; background: linear-gradient(135deg, #f97316, #ea580c); color: #fff; text-decoration: none; padding: 13px 32px; border-radius: 10px; font-size: 14px; font-weight: 700; letter-spacing: .01em; }
  .sign-off { font-size: 14px; color: #9ca3af; line-height: 1.7; margin-top: 24px; }
  .sign-name { color: #e5e7eb; font-weight: 600; }
  .footer { padding: 20px 40px; background: #111114; border-top: 1px solid #27272a; text-align: center; }
  .footer-text { font-size: 11.5px; color: #4b5563; line-height: 1.8; }
  .footer-link { color: #f97316; text-decoration: none; }
</style>
</head>
<body>
<div class="wrap">
  <div class="card">

    <div class="header">
      <div class="logo">
        <div class="logo-mark">
          <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M13 3L4 14h7l-2 7 9-11h-7l2-7z"/></svg>
        </div>
        <span class="logo-name">Plazmasoft</span>
      </div>
      <h1 class="header-title">We received your message.</h1>
      <p class="header-sub">Our team will review your project details and get back to you within one business day.</p>
    </div>

    <div class="body">
      <p class="greeting">Hi {{ $submission->name }},</p>
      <p class="body-text">Thank you for reaching out. We have logged your request and it is already in our queue. Here is a summary of what you shared:</p>

      <div class="summary-card">
        <div class="summary-title">Your Submission</div>
        <div class="summary-row">
          <span class="summary-label">Project</span>
          <span class="summary-value">{{ $submission->project_type }}</span>
        </div>
        <div class="summary-row">
          <span class="summary-label">Budget</span>
          <span class="summary-value">{{ $submission->budget_range }}</span>
        </div>
        @if($submission->company)
        <div class="summary-row">
          <span class="summary-label">Company</span>
          <span class="summary-value">{{ $submission->company }}</span>
        </div>
        @endif
      </div>

      <div class="divider"></div>

      <p class="body-text" style="font-weight:600; color:#e5e7eb; font-size:13px; margin-bottom:12px;">What happens next</p>
      <div class="timeline">
        <div class="tl-item">
          <div class="tl-step">1</div>
          <div class="tl-content">
            <p class="tl-title">We review your requirements</p>
            <p class="tl-desc">Usually within a few hours during business hours (Mon to Fri, 9am to 6pm IST).</p>
          </div>
        </div>
        <div class="tl-item">
          <div class="tl-step">2</div>
          <div class="tl-content">
            <p class="tl-title">30-minute discovery call</p>
            <p class="tl-desc">We schedule a quick call to understand your goals and answer any questions.</p>
          </div>
        </div>
        <div class="tl-item">
          <div class="tl-step">3</div>
          <div class="tl-content">
            <p class="tl-title">Proposal and timeline</p>
            <p class="tl-desc">A detailed scope, fixed price, and realistic timeline delivered within 2 business days.</p>
          </div>
        </div>
      </div>

      <div class="cta-wrap">
        <a href="{{ url('/portfolio') }}" class="cta-btn">Explore our portfolio</a>
      </div>

      <div class="divider"></div>

      <p class="body-text">Need to reach us sooner? WhatsApp us at <a href="https://wa.me/{{ setting('whatsapp_number', '919136281234') }}" style="color:#f97316; text-decoration:none;">+{{ setting('whatsapp_number', '919136281234') }}</a> and we will respond within the hour.</p>

      <p class="sign-off">
        Talk soon,<br>
        <span class="sign-name">The Plazmasoft Team</span>
      </p>
    </div>

    <div class="footer">
      <p class="footer-text">
        Plazmasoft &mdash; Noida, Uttar Pradesh, India<br>
        <a href="{{ url('/') }}" class="footer-link">plazmasoft.com</a>
        &nbsp;&middot;&nbsp;
        <a href="{{ url('/privacy-policy') }}" class="footer-link">Privacy Policy</a>
      </p>
      <p class="footer-text" style="margin-top:8px;">You are receiving this because you submitted our contact form. We will not send you marketing email.</p>
    </div>

  </div>
</div>
{{-- 1x1 transparent tracking pixel --}}
<img src="{{ route('track.email-open', $submission->open_token) }}" width="1" height="1" alt="" style="display:block;width:1px;height:1px;border:0;opacity:0;">
</body>
</html>
