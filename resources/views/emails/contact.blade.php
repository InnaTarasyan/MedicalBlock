<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submission</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333; max-width: 600px; margin: 0 auto; padding: 20px;">
    <div style="background-color: #f8f9fa; border-radius: 8px; padding: 20px; margin-bottom: 20px;">
        <h1 style="color: #059669; margin-top: 0;">New Contact Form Submission</h1>
        <p style="margin-bottom: 0;">You have received a new message from the MedicalBlock contact form.</p>
    </div>

    <div style="background-color: #ffffff; border: 1px solid #e5e7eb; border-radius: 8px; padding: 20px;">
        <table style="width: 100%; border-collapse: collapse;">
            <tr>
                <td style="padding: 10px 0; border-bottom: 1px solid #e5e7eb; font-weight: bold; width: 120px;">Name:</td>
                <td style="padding: 10px 0; border-bottom: 1px solid #e5e7eb;">{{ $name }}</td>
            </tr>
            <tr>
                <td style="padding: 10px 0; border-bottom: 1px solid #e5e7eb; font-weight: bold;">Email:</td>
                <td style="padding: 10px 0; border-bottom: 1px solid #e5e7eb;">
                    <a href="mailto:{{ $email }}" style="color: #059669; text-decoration: none;">{{ $email }}</a>
                </td>
            </tr>
            <tr>
                <td style="padding: 10px 0; border-bottom: 1px solid #e5e7eb; font-weight: bold;">Subject:</td>
                <td style="padding: 10px 0; border-bottom: 1px solid #e5e7eb;">{{ $subject }}</td>
            </tr>
            <tr>
                <td style="padding: 10px 0; font-weight: bold; vertical-align: top;">Message:</td>
                <td style="padding: 10px 0;">
                    <div style="white-space: pre-wrap; background-color: #f9fafb; padding: 15px; border-radius: 4px; margin-top: 5px;">{{ $messageContent }}</div>
                </td>
            </tr>
        </table>
    </div>

    <div style="margin-top: 20px; padding: 15px; background-color: #f0fdf4; border-left: 4px solid #059669; border-radius: 4px;">
        <p style="margin: 0; font-size: 14px; color: #166534;">
            <strong>Note:</strong> You can reply directly to this email to respond to {{ $name }}.
        </p>
    </div>
</body>
</html>

