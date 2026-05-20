<!DOCTYPE html>
<html>
<head>
    <title> contact form email confirmation - {{config('app.name')}}  </title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
        h1{
            padding: 0.5rem 0rem;
        }
        p{
            margin-bottom: 0.5rem;
        }
        .header, .footer {
            text-align: center;
            background: #0d6efd;
            color: white;
            padding: 15px;
            border-radius: 5px 5px 0 0;
        }
        .content {
            margin: 15px 0;
        }
        .button {
            display: inline-block;
            background: #0d6efd;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            margin: 10px 0;
        }
        .social-links img {
            width: 24px;
            margin: 5px;
        }
        .services ul {
            padding-left: 20px;
        }
        .services li {
            margin-bottom: 10px;
        }
        .footer {
            background: #343a40;
            color: #ddd;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header Section -->
        <div class="header">
            <h1>Thank You for Contacting Us!</h1>
        </div>

        <!-- Content Section -->
        <div class="content">
            <p>Hi {{ $contactDetails->name }},</p>
            <p>We have received your message, and our team will respond shortly. Here are the details you submitted:</p>
            <p><strong>Subject:</strong> {{ $contactDetails->subject }}</p>

            @if ($contactDetails->budget)
                <p><strong>Budget:</strong> {{ $contactDetails->budget }}</p>
            @endif

            <p><strong>Email:</strong> {{ $contactDetails->email }}</p>
            <p><strong>Phone:</strong> {{ $contactDetails->phoneNumber }}</p>
            <p><strong>Message:</strong> {{ $contactDetails->message }}</p>

            <!-- Services Section -->
            <div class="services">
                <h3>Explore Our Services</h3>
                <ul>
                    <li>Custom Web Development</li>
                    <li>Mobile App Solutions</li>
                    <li>Digital Marketing Strategies</li>
                    <li>CRM & ERP Development</li>
                </ul>
            </div>
            <a href="{{ route('index') }}" class="button">Visit Our Website</a>
        </div>

        <!-- Footer Section -->
        <div class="footer">
            <p>Contact us: <a href="mailto:{{config('app.company_email')}}" style="color: #17a2b8;">{{config('app.company_email')}}</a></p>
            {{-- <div class="social-links">
                <a href="https://facebook.com/yourcompany"><img src="{{ asset('images/facebook.png') }}" alt="Facebook"></a>
                <a href="https://twitter.com/yourcompany"><img src="{{ asset('images/twitter.png') }}" alt="Twitter"></a>
                <a href="https://linkedin.com/company/yourcompany"><img src="{{ asset('images/linkedin.png') }}" alt="LinkedIn"></a>
                <a href="https://instagram.com/yourcompany"><img src="{{ asset('images/instagram.png') }}" alt="Instagram"></a>
            </div> --}}
            <p>&copy; {{ date('Y') }} {{ config('app.company_name') }}. All Rights Reserved.</p>
        </div>
    </div>
</body>
</html>
