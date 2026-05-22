<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Got your message</title>
<style>
  body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif; background: #f9fafb; margin: 0; padding: 24px; color: #111827; }
  .wrap { max-width: 560px; margin: 0 auto; background: #fff; border-radius: 12px; overflow: hidden; box-shadow: 0 1px 3px rgba(0,0,0,.1); }
  .header { background: #fb923c; padding: 32px; text-align: center; }
  .header h1 { color: #fff; margin: 0 0 4px; font-size: 20px; font-weight: 700; }
  .header p { color: #fed7aa; margin: 0; font-size: 14px; }
  .body { padding: 32px; }
  .body p { margin: 0 0 16px; font-size: 15px; line-height: 1.6; color: #374151; }
  .summary { background: #fff7ed; border: 1px solid #fed7aa; border-radius: 8px; padding: 20px; margin: 24px 0; }
  .summary-row { display: flex; gap: 12px; margin-bottom: 8px; font-size: 14px; }
  .summary-row:last-child { margin-bottom: 0; }
  .summary-label { font-weight: 600; color: #9a3412; min-width: 100px; }
  .summary-value { color: #374151; }
  .btn { display: inline-block; background: #fb923c; color: #fff !important; text-decoration: none; padding: 12px 28px; border-radius: 8px; font-weight: 600; font-size: 14px; margin-top: 8px; }
  .footer { padding: 20px 32px; background: #f9fafb; font-size: 12px; color: #9ca3af; text-align: center; line-height: 1.6; }
  a { color: #fb923c; }
</style>
</head>
<body>
<div class="wrap">
  <div class="header">
    <h1>We got your message.</h1>
    <p>Someone from our team will be in touch within one business day.</p>
  </div>
  <div class="body">
    <p>Hi {{ $submission->name }},</p>
    <p>Thank you for reaching out to Plazmasoft. We have received your inquiry and will review it shortly.</p>
    <div class="summary">
      <div class="summary-row">
        <span class="summary-label">Project type</span>
        <span class="summary-value">{{ $submission->project_type }}</span>
      </div>
      <div class="summary-row">
        <span class="summary-label">Budget range</span>
        <span class="summary-value">{{ $submission->budget_range }}</span>
      </div>
    </div>
    <p>In the meantime, you can explore our past work to get a sense of what we build:</p>
    <p><a href="{{ url('/portfolio') }}" class="btn">See our portfolio</a></p>
    <p style="margin-top:24px;">If you have urgent questions, WhatsApp us directly at <a href="https://wa.me/{{ setting('whatsapp_number', '919136281234') }}">+{{ setting('whatsapp_number', '919136281234') }}</a>.</p>
    <p>Talk soon,<br><strong>The Plazmasoft Team</strong></p>
  </div>
  <div class="footer">
    {{ setting('legal_name', 'Kushwaha Webformat Private Limited') }}<br>
    Mumbai and Patna, India &middot; <a href="{{ url('/') }}">plazmasoft.com</a>
  </div>
</div>
</body>
</html>
