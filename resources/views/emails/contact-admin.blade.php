<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>New Lead</title>
<style>
  * { box-sizing: border-box; margin: 0; padding: 0; }
  body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; background: #0f0f0f; padding: 24px 16px; color: #e5e7eb; }
  .wrap { max-width: 580px; margin: 0 auto; }
  .card { background: #18181b; border: 1px solid #27272a; border-radius: 20px; overflow: hidden; }
  .header { background: #111827; padding: 20px 32px; border-bottom: 1px solid #27272a; display: flex; align-items: center; gap: 10px; }
  .badge { background: rgba(249,115,22,.15); border: 1px solid rgba(249,115,22,.3); color: #fb923c; font-size: 10px; font-weight: 700; letter-spacing: .1em; text-transform: uppercase; padding: 4px 10px; border-radius: 20px; }
  .header-title { font-size: 15px; font-weight: 600; color: #f9fafb; }
  .body { padding: 28px 32px; }
  .row { margin-bottom: 18px; }
  .label { font-size: 10px; font-weight: 700; color: #6b7280; text-transform: uppercase; letter-spacing: .1em; margin-bottom: 5px; }
  .value { font-size: 14px; color: #e5e7eb; }
  .value a { color: #f97316; text-decoration: none; }
  .divider { height: 1px; background: #27272a; margin: 20px 0; }
  .message-box { background: #111827; border-left: 3px solid #f97316; border-radius: 0 8px 8px 0; padding: 16px 18px; font-size: 13.5px; line-height: 1.7; color: #d1d5db; white-space: pre-wrap; }
  .grid2 { display: grid; grid-template-columns: 1fr 1fr; gap: 0; }
  .tracking-card { background: #111827; border: 1px solid #1f2937; border-radius: 12px; padding: 18px 20px; margin-top: 4px; }
  .tracking-title { font-size: 10px; font-weight: 700; color: #f97316; text-transform: uppercase; letter-spacing: .1em; margin-bottom: 12px; }
  .tracking-row { display: flex; justify-content: space-between; align-items: center; margin-bottom: 8px; font-size: 13px; }
  .tracking-row:last-child { margin-bottom: 0; }
  .tracking-key { color: #6b7280; }
  .tracking-val { color: #e5e7eb; font-weight: 500; }
  .sent-yes { color: #4ade80; }
  .sent-no { color: #f87171; }
  .cta-btn { display: inline-block; background: linear-gradient(135deg, #f97316, #ea580c); color: #fff; text-decoration: none; padding: 11px 24px; border-radius: 9px; font-size: 13px; font-weight: 700; margin-top: 20px; }
  .footer { padding: 16px 32px; background: #111114; border-top: 1px solid #27272a; font-size: 11px; color: #4b5563; text-align: center; line-height: 1.8; }
</style>
</head>
<body>
<div class="wrap">
  <div class="card">

    <div class="header">
      <span class="badge">New Lead</span>
      <span class="header-title">Contact form submission</span>
    </div>

    <div class="body">

      <div class="grid2">
        <div class="row" style="padding-right:16px">
          <div class="label">Name</div>
          <div class="value">{{ $submission->name }}</div>
        </div>
        <div class="row">
          <div class="label">Email</div>
          <div class="value"><a href="mailto:{{ $submission->email }}">{{ $submission->email }}</a></div>
        </div>
      </div>

      @if($submission->phone || $submission->company)
      <div class="grid2">
        @if($submission->phone)
        <div class="row" style="padding-right:16px">
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
      </div>
      @endif

      <div class="grid2">
        <div class="row" style="padding-right:16px">
          <div class="label">Project Type</div>
          <div class="value">{{ $submission->project_type }}</div>
        </div>
        <div class="row">
          <div class="label">Budget Range</div>
          <div class="value">{{ $submission->budget_range }}</div>
        </div>
      </div>

      <div class="row">
        <div class="label">Message</div>
        <div class="message-box">{{ $submission->message }}</div>
      </div>

      <div class="divider"></div>

      <div class="tracking-card">
        <div class="tracking-title">Email Tracking</div>
        <div class="tracking-row">
          <span class="tracking-key">Autoreply sent</span>
          <span class="tracking-val {{ $submission->autoreply_sent_at ? 'sent-yes' : 'sent-no' }}">
            {{ $submission->autoreply_sent_at ? $submission->autoreply_sent_at->format('d M Y, g:i A') . ' IST' : 'Pending' }}
          </span>
        </div>
        <div class="tracking-row">
          <span class="tracking-key">Email opened</span>
          <span class="tracking-val {{ $submission->email_opened_at ? 'sent-yes' : '' }}">
            {{ $submission->email_opened_at ? $submission->email_opened_at->format('d M Y, g:i A') . ' IST' : 'Not yet' }}
          </span>
        </div>
        <div class="tracking-row">
          <span class="tracking-key">Open count</span>
          <span class="tracking-val">{{ $submission->email_open_count }}</span>
        </div>
      </div>

      @if($submission->source)
      <div class="row" style="margin-top:16px; margin-bottom:0">
        <div class="label">Source</div>
        <div class="value" style="font-size:12px; color:#6b7280; word-break:break-all;">{{ $submission->source }}</div>
      </div>
      @endif

      <div style="margin-top:4px">
        <a href="{{ url('/admin/contact-submissions/' . $submission->id . '/edit') }}" class="cta-btn">Open in Admin Panel</a>
      </div>

    </div>

    <div class="footer">
      Received {{ now()->format('d M Y, g:i A') }} IST via plazmasoft.com
    </div>

  </div>
</div>
</body>
</html>
