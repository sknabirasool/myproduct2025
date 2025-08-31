<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Build Your Project</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px;">
    <div style="background-color: #ffffff; padding: 20px; border-radius: 5px; max-width: 600px; margin: auto;">
        <h2 style="color: #333;">Hi {{ $user }},</h2>
        <p>Welcome to <strong>Build Your Project</strong>! We’re thrilled to have you on board.</p>

        <p>Your project "<strong>{{ $project_title }}</strong>" has been successfully registered. Our team will contact you soon.</p>

        <h3 style="color: #333;">Your Login Details</h3>
        <p><strong>Email:</strong> {{ $email }}</p>
        <p><strong>Password:</strong> BuildYourProject@123</p>

        <p>You can log in to your account using the link below:</p>

        <a href="http://buildyourproject.in/web-login" style="display: inline-block; padding: 10px 15px; background-color: #28a745; color: #ffffff; text-decoration: none; border-radius: 5px; margin-top: 10px;">Login to Your Account</a>

        <p style="color:#d00; font-size:14px;">(Please change your password after first login for security.)</p>



        <p>For any queries, contact us at
            <a href="mailto:info@buildyourproject.in">info@buildyourproject.in</a>
            or visit our <a href="http://buildyourproject.in/">website</a>.
        </p>

        <br>
        <p>Best regards,</p>
        <p>The Build Your Project Team</p>
    </div>
</body>
</html>
