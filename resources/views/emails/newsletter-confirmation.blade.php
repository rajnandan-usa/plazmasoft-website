<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Confirm your subscription</title>
<style>
  body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif; background: #f9fafb; margin: 0; padding: 24px; color: #111827; }
  .wrap { max-width: 520px; margin: 0 auto; background: #fff; border-radius: 12px; overflow: hidden; box-shadow: 0 1px 3px rgba(0,0,0,.1); }
  .header { background: #fb923c; padding: 32px; text-align: center; }
  .header h1 { color: #fff; margin: 0; font-size: 20px; font-weight: 700; }
  .body { padding: 32px; text-align: center; }
  .body p { margin: 0 0 16px; font-size: 15px; line-height: 1.6; color: #374151; }
  .btn { display: inline-block; background: #fb923c; color: #fff !important; text-decoration: none; padding: 14px 32px; border-radius: 8px; font-weight: 700; font-size: 15px; margin: 8px 0 24px; }
  .note { font-size: 13px; color: #9ca3af; }
  .footer { padding: 16px 32px; background: #f9fafb; font-size: 12px; color: #9ca3af; text-align: center; }
  a { color: #fb923c; }
</style>
</head>
<body>
<div class="wrap">
  <div class="header">
    <h1>One click to confirm</h1>
  </div>
  <div class="body">
    <p>You asked to receive updates from <strong>Plazmasoft</strong>. Click the button below to confirm your subscription.</p>
    <a href="{{ url('/newsletter/confirm/' . $subscriber->token) }}" class="btn">Confirm my subscription</a>
    <p class="note">If you did not request this, you can ignore this email. You will not receive any updates unless you click the button above.</p>
    <p class="note">To unsubscribe at any time, visit:<br><a href="{{ url('/newsletter/unsubscribe/' . $subscriber->token) }}">{{ url('/newsletter/unsubscribe/' . $subscriber->token) }}</a></p>
  </div>
  <div class="footer">
    {{ setting('legal_name', 'Kushwaha Webformat Private Limited') }} &middot; <a href="{{ url('/') }}">plazmasoft.com</a>
  </div>
</div>
</body>
</html>
