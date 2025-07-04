<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Your Password</title>
</head>

<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333; max-width: 600px; margin: 0 auto; padding: 20px;">
    <div style="background: linear-gradient(to right, #4CAF50, #45a049); padding: 20px; text-align: center;">
        <h1 style="color: white; margin: 0;">Password Reset</h1>
    </div>
    <div style="background-color: #f9f9f9; padding: 20px; border-radius: 0 0 5px 5px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
        <p>Hello <?= $mail_data['user']->name ?></p>
        <p>We're writing to confirm that your password has been successfully reset.</p>
        <div style="text-align: center; margin: 30px 0;">
            <div style="background-color: #4CAF50; color: white; width: 50px; height: 50px; line-height: 50px; border-radius: 50%; display: inline-block; font-size: 30px;">
                ✓
            </div>
        </div>
        <p>If you did not initiate this password reset, please contact our support team immediately.</p>
        <p>For security reasons, we recommend that you:</p>
        <ul>
            <li>Use a strong, unique password</li>
            <li>Enable two-factor authentication if available</li>
            <li>Avoid using the same password across multiple sites</li>
        </ul>
        <p>Thank you for helping us keep your account secure.</p>
        <p>Best regards,<br><?= $mail_data['company'] ?></p>
    </div>
    <div style="text-align: center; margin-top: 20px; color: #888; font-size: 0.8em;">
        <p>This is an automated message, please do not reply to this email.</p>
    </div>
</body>

</html>