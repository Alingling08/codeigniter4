<?php

use CodeIgniter\Email\Email;
use Config\Services;

if (!function_exists('send_email')) {
    /**
     * Send an email using CodeIgniter's email service.
     *
     * @param string $to       Recipient email address
     * @param string $toName       Recipient Name
     * @param string $subject  Email subject
     * @param string $message  Email body (HTML or plain text)
     * @param string|null $from     Sender email (optional)
     * @param string|null $fromName Sender name (optional)
     * @return bool True if email was sent, false otherwise
     */
    function send_email(string $to, string $toName, string $subject, string $message, ?string $from = null, ?string $fromName = null): bool
    {
        try {
            $email = Services::email();

            // Use default from config if not provided
            if ($from === null) {
                $from = env('email.fromEmail');
                $fromName = env('email.fromName');
            }

            $email->setFrom($from, $fromName ?? '');
            $email->setTo($to, $toName);
            $email->setSubject($subject);
            $email->setMessage($message);

            return $email->send();
        } catch (Exception $e) {
            // Print debugging info on failure
            echo "Message could not be sent. Debug info: " . $email->printDebugger(['headers']);
            return false;
        }
    }
}
