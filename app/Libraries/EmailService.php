<?php

namespace App\Libraries;

// Make hash password and compare requested and stored password
class EmailService
{
    public function sendEmail($userInfo, $subject, $mail_data, $emailTemplate,)
    {
        $mail_data['company'] = env('COMPANY_NAME');
        
        $view = \Config\Services::renderer();
        $mail_body = $view->setVar('mail_data', $mail_data)->render('email_templates/' . $emailTemplate);

        $sent = send_email(
            $userInfo->email,
            $userInfo->name,
            $subject,
            $mail_body
        );

        return $sent;
    }
}
