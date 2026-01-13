<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Message</title>
    <style>
        /* Reset styles for email clients */
        body { margin: 0; padding: 0; background-color: #f3f4f6; font-family: Arial, sans-serif; }
        table { border-spacing: 0; }
        td { padding: 0; }
        img { border: 0; }
        .wrapper { width: 100%; table-layout: fixed; background-color: #f3f4f6; padding-bottom: 40px; }
        .main { background-color: #ffffff; margin: 0 auto; width: 100%; max-width: 600px; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
        .header { background-color: #ea580c; padding: 30px 20px; text-align: center; }
        .header h1 { color: #ffffff; margin: 0; font-size: 24px; font-weight: bold; }
        .content { padding: 30px 40px; color: #374151; font-size: 16px; line-height: 1.6; }
        .label { font-weight: bold; color: #111827; display: block; margin-bottom: 5px; margin-top: 20px; }
        .info-box { background-color: #f9fafb; padding: 15px; border-left: 4px solid #ea580c; border-radius: 4px; color: #4b5563; }
        .footer { text-align: center; padding: 20px; color: #9ca3af; font-size: 12px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <center>
            <table class="main" width="100%">
                <tr>
                    <td class="header">
                        <h1>New Contact Inquiry</h1>
                    </td>
                </tr>

                <tr>
                    <td class="content">
                        <p>Hello Admin,</p>
                        <p>You have received a new message via the website contact form.</p>

                        <span class="label">Client Name:</span>
                        <div class="info-box">{{ $name }}</div>

                        <span class="label">Client Email:</span>
                        <div class="info-box">{{ $email }}</div>
                        
                        <span class="label">Subject:</span>
                        <div class="info-box" style="white-space: pre-wrap;">{{ $sub }}</div>
                        
                        <span class="label">Message:</span>
                        <div class="info-box" style="white-space: pre-wrap;">{{ $msg }}</div>
                    </td>
                </tr>

                <tr align="center">
                        <img src="https://abcstudiogroup.com/wp-content/uploads/2023/08/cropped-ABC-LOGO-350.png" width="112" alt="logo ABC Studio">
                    </tr>
                    <tr>
                    <td class="footer">
                        &copy; {{ date('Y') }} ABC Studio. All rights reserved.
                    </td>
                </tr>
            </table>
        </center>
    </div>
</body>
</html>