<?php

namespace App\Services;

use App\Libraries\CIAuth;
use App\Libraries\Hash;
use App\Models\PasswordResetToken;
use CodeIgniter\Config\Services;
use CodeIgniter\I18n\Time;


class AuthService
{
    public function detectIdentityType(string $identity): string
    {
        if (filter_var($identity, FILTER_VALIDATE_EMAIL)) {
            return 'email';
        }

        if (preg_match('/^\+?[0-9]{10,15}$/', $identity)) {
            return 'phone';
        }

        return 'username';
    }

    public function getLoginValidationRules(string $identityType): array
    {
        $identityRulesMap = [
            'email' => [
                'email' => [
                    'rules' => 'required|valid_email|is_not_unique[users.email]',
                    'errors' => [
                        'required' => 'Email is required.',
                        'valid_email' => 'Invalid email format.',
                        'is_not_unique' => 'Email does not exist.'
                    ]
                ]
            ],
            'username' => [
                'email' => [
                    'rules' => 'required|is_not_unique[users.username]',
                    'errors' => [
                        'required' => 'Username is required.',
                        'is_not_unique' => 'Username does not exist.'
                    ]
                ]
            ],
            'phone' => [
                'email' => [
                    'rules' => 'required|regex_match[/^\+?[0-9]{10,15}$/]|is_not_unique[users.phone]',
                    'errors' => [
                        'required' => 'Phone number is required.',
                        'regex_match' => 'Invalid phone number format.',
                        'is_not_unique' => 'Phone number does not exist.'
                    ]
                ]
            ]
        ];

        $passwordRules = [
            'password' => [
                'rules' => 'required|min_length[5]|max_length[45]',
                'errors' => [
                    'required' => 'Password is required.',
                    'min_length' => 'Password must be at least 5 characters.',
                    'max_length' => 'Password must not exceed 45 characters.'
                ]
            ]
        ];

        return array_merge($identityRulesMap[$identityType], $passwordRules);
    }

    public function validateEmail()
    {
        $emailRules = [
            'email' => [
                'rules' => 'required|valid_email|is_not_unique[users.email]',
                'errors' => [
                    'required' => 'Email is required.',
                    'valid_email' => 'Email is not valid.',
                    'is_not_unique' => 'Email does not exist.'
                ]
            ]
        ];

        return $emailRules;
    }

    public function validatePassword()
    {
        $passwordRules = [
            'new_password' => [
                'rules' => 'required|min_length[5]|max_length[20]|is_password_strong[new_password]',
                'errors' => [
                    'required' => 'Enter new password.',
                    'min_length' => 'New Password must be at least 5 characters.',
                    'max_length' => 'New Password must not exceed 20 characters.',
                    'is_password_strong' => 'New Password must contain atleast 1 uppercase, 1 lowercase, 1 number and 1 special character.'
                ]
            ],
            'password_confirmation' => [
                'rules' => 'required|matches[new_password]',
                'errors' => [
                    'required' => 'Confirm new password.',
                    'matches' => 'Passwords do not match.'
                ]
            ]
        ];

        return $passwordRules;
    }

    public function checkPassword($password, $userPassword)
    {
        return Hash::check($password, $userPassword);
    }

    public function loginUser(array $user): void
    {
        CIAuth::setCIAuth($user);
    }

    public function logoutUser()
    {
        CIAuth::forget();
    }

    public function generateToken()
    {
        return bin2hex(openssl_random_pseudo_bytes(65));
    }

    public function getResetPasswordToken($email)
    {
        $token = $this->generateToken();

        $passwordResetTokenModel = new PasswordResetToken();
        $isOldTokenExists = $passwordResetTokenModel->checkPasswordResetTokenByEmail($email);

        if (!$isOldTokenExists) {
            $passwordResetTokenModel->insertPasswordToken($email, $token);
        } else {
            $passwordResetTokenModel->updatePasswordToken($email, $token);
        }

        return $token;
    }


    public function checkTokenifValid($token)
    {
        $passwordResetTokenModel = new PasswordResetToken();

        $check_token = $passwordResetTokenModel->checkPasswordResetTokenByToken($token);

        if (!$check_token) {
            return false;
        }

        return $this->isTokenValid($check_token->created_at, 60);
    }

    public function isTokenValid($createdAt, $minutes)
    {
        $created = Time::parse($createdAt);
        $now = Time::now();

        return !$now->isAfter($created->addMinutes($minutes));
    }
}
