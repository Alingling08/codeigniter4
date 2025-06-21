<?php

namespace App\Libraries;


class AuthService
{
    private function detectIdentityType(string $identity): string
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
}
