<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>New Lead</title>
<style>
  body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif; background: #f9fafb; margin: 0; padding: 24px; color: #111827; }
  .wrap { max-width: 560px; margin: 0 auto; background: #fff; border-radius: 12px; overflow: hidden; box-shadow: 0 1px 3px rgba(0,0,0,.1); }
  .header { background: #fb923c; padding: 24px 32px; }
  .header h1 { color: #fff; margin: 0; font-size: 18px; font-weight: 600; }
  .body { padding: 32px; }
  .row { margin-bottom: 16px; }
  .label { font-size: 11px; font-weight: 600; color: #6b7280; text-transform: uppercase; letter-spacing: .05em; margin-bottom: 4px; }
  .value { font-size: 15px; color: #111827; }
  .message-box { background: #f9fafb; border-left: 3px solid #fb923c; padding: 16px; border-radius: 4px; font-size: 14px; line-height: 1.6; color: #374151; white-space: pre-wrap; }
  .footer { padding: 16px 32px; background: #f9fafb; font-size: 12px; color: #9ca3af; text-align: center; }
  a { color: #fb923c; }
</style>
</head>
<body>
<div class="wrap">
  <div class="header">
    <h1>New contact form submission</h1>
  </div>
  <div class="body">
    <div class="row">
      <div class="label">Name</div>
      <div class="value">{{ $submission->name }}</div>
    </div>
    <div class="row">
      <div class="label">Email</div>
      <div class="value"><a href="mailto:{{ $submission->email }}">{{ $submission->email }}</a></div>
    </div>
    @if($submission->phone)
    <div class="row">
      <div class="label">Phone</div>
      <div class="value"><a href="tel:{{ $submission->phone }}">{{ $submission->phone }}</a></div>
    </div>
    @endif
    @if($submission->company)
    <div class="row">
      <div class="label">Company</div>
      <div class="value">{{ $submission->company }}</div>
    </div>
    @endif
    <div class="row">
      <div class="label">Project Type</div>
      <div class="value">{{ $submission->project_type }}</div>
    </div>
    <div class="row">
      <div class="label">Budget Range</div>
      <div class="value">{{ $submission->budget_range }}</div>
    </div>
    <div class="row">
      <div class="label">Message</div>
      <div class="message-box">{{ $submission->message }}</div>
    </div>
    @if($submission->source)
    <div class="row">
      <div class="label">Source</div>
      <div class="value" style="font-size:13px; color:#6b7280;">{{ $submission->source }}</div>
    </div>
    @endif
  </div>
  <div class="footer">
    Received {{ now()->format('d M Y, g:i A') }} IST via plazmasoft.com
  </div>
</div>
</body>
</html>
