<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us Inquiry</title>
    <style>
        /* A more modern and clean email template style */
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';
            background-color: #f4f4f7;
            margin: 0;
            padding: 0;
            color: #3d4852;
        }
        .email-wrapper {
            width: 100%;
            background-color: #f4f4f7;
            padding: 40px 0;
        }
        .email-content {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            overflow: hidden;
        }
        .email-header {
            background-color: #4a5568;
            color: #ffffff;
            padding: 24px;
            text-align: center;
        }
        .email-header h1 {
            margin: 0;
            font-size: 24px;
        }
        .email-body {
            padding: 32px;
            line-height: 1.6;
        }
        .email-body p {
            margin: 0 0 16px;
        }
        .email-body strong {
            color: #2d3748;
            font-weight: 600;
        }
        .message-block {
            background-color: #edf2f7;
            border-left: 4px solid #718096;
            padding: 16px;
            margin-top: 16px;
            border-radius: 8px;
        }
        .email-footer {
            text-align: center;
            padding: 24px;
            font-size: 12px;
            color: #a0aec0;
        }
    </style>
</head>
<body>
    <div class="email-wrapper">
        <div class="email-content">
            <div class="email-header">
                <h1>New Inquiry Received</h1>
            </div>
            <div class="email-body">
                <p>Hello,</p>
                <p>A new message has been submitted through your website's contact form. The details are provided below.</p>
                <hr style="border: none; border-top: 1px solid #e2e8f0; margin: 24px 0;">
                <p><strong>Name:</strong> {{ $name }}</p>
                <p><strong>Country:</strong> {{ $country }}</p>
                <p><strong>Check-in Date:</strong> {{ $check_in_date }}</p>
                <p><strong>Check-out Date:</strong> {{ $check_out_date }}</p>
                <p><strong>Message:</strong></p>
                <div class="message-block">
                    <p style="margin: 0;">{{ $messageBody }}</p>
                </div>
            </div>
            <div class="email-footer">
                <p>This is an automated notification. Please do not reply to this email.</p>
            </div>
        </div>
    </div>
</body>
</html>
