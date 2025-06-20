<?php

namespace App\Services;

use App\Libraries\CIAuth;
use App\Libraries\Hash;
use App\Models\PasswordResetToken;
use CodeIgniter\Config\Services;
use CodeIgniter\I18n\Time;


class UserProfileValidator
{
    protected $authService;

    public function __construct()
    {
        $this->authService = new AuthService();
    }

    public function validateUserProfileForm()
    {
        $userProfileRules = [
            'name' => [
                'rules' => 'required',
                'errors' => 'Full name is required.'
            ],
            'gender' => [
                'rules' => 'required|in_list[male,female,non-binary,not-to-say]',
                'errors' => [
                    'required' => 'Gender is required.',
                    'in_list'  => 'Please select a valid gender.',
                ]
            ],
            'birthdate' => [
                'rules' => 'required|valid_date[Y-m-d]|date_not_in_future',
                'errors' => [
                    'required'           => 'Birthdate is required.',
                    'valid_date'         => 'Please enter a valid date in YYYY-MM-DD format.',
                    'date_not_in_future'    => 'Birthdate cannot be in the future.',
                ]
            ],
            'mobile' => [
                'rules' => 'required|regex_match[/^\+?[0-9]{10,15}$/]',
                'errors' => [
                    'required'     => 'Mobile number is required.',
                    'regex_match'  => 'Enter a valid mobile number (10–15 digits, optional +).',
                ]
            ],
            'alternative_contact' => [
                'rules' => 'required|numeric|min_length[7]|max_length[15]',
                'errors' => [
                    'required'    => 'Mobile number is required.',
                    'numeric'     => 'Mobile number must contain only digits.',
                    'min_length'  => 'Mobile number must be at least 7 digits.',
                    'max_length'  => 'Mobile number must not exceed 15 digits.',
                ]
            ],
            'social_fb' => [
                'rules' => 'permit_empty|valid_url|regex_match[/^(https?:\/\/)?(www\.)?facebook\.com\/[A-Za-z0-9\.]+$/]',
                'errors' => [
                    'valid_url'    => 'Please enter a valid URL.',
                    'regex_match'  => 'Only valid Facebook profile/page URLs are allowed.',
                ]
            ],
            'social_instagram' => [
                'rules' => 'permit_empty|valid_url|regex_match[/^(https?:\/\/)?(www\.)?instagram\.com\/[A-Za-z0-9\.]+$/]',
                'errors' => [
                    'valid_url'    => 'Please enter a valid URL.',
                    'regex_match'  => 'Only valid Instagram profile/page URLs are allowed.',
                ]
            ],
            'social_twitter' => [
                'rules' => 'permit_empty|valid_url|regex_match[/^(https?:\/\/)?(www\.)?x\.com\/[A-Za-z0-9\.]+$/]',
                'errors' => [
                    'valid_url'    => 'Please enter a valid URL.',
                    'regex_match'  => 'Only valid Twitter profile/page URLs are allowed.',
                ]
            ],
            'address' => [
                'rules' => 'required|min_length[5]|max_length[255]',
                'errors' => [
                    'required'    => 'Address is required.',
                    'min_length'  => 'Address must be at least 5 characters long.',
                    'max_length'  => 'Address must not exceed 255 characters.',
                ]
            ]

        ];

        return $userProfileRules;
    }

    public function validateUserPasword()
    {
        $passwordRules = [
            'current_password' => [
                'rules' => 'required|min_length[5]|matches_current_password[current_password]',
                'errors' => [
                    'required' => "Enter current password",
                    'min_length' => "Pasword must be at least 5 characters long.",
                    'matches_current_password' => 'The current password is incorrect.'
                ]
            ],
        ];
        $newPasswordRules = $this->authService->validatePassword();

        // Merge with rules for new & confirm password
        return array_merge($passwordRules, $newPasswordRules);
    }
}
