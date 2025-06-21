<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Libraries\CIAuth;
use App\Libraries\EmailService;
use App\Models\User;
use App\Services\UserProfileValidator;
use CodeIgniter\HTTP\ResponseInterface;

class AdminController extends BaseController
{
    protected $helpers = ['url', 'form', 'CIMail', 'SendEmail', 'CIFunction'];
    protected $userProfileValidator;
    protected $emailService;

    public function __construct()
    {
        $this->userProfileValidator = new UserProfileValidator();
        $this->emailService = new EmailService();
    }

    public function index()
    {
        $data = [
            'pageTitle' => 'Dashboard | Scorpio Hub'
        ];

        return view('pages/admin/dashboard', $data);
    }

    public function profile()
    {
        $data = [
            'pageTitle' => 'Profile | Admin | Scorpio Hub'
        ];

        return view('pages/admin/profile', $data);
    }

    public function updatePersonalInfo()
    {
        $request = \Config\Services::request();
        $validation = \Config\Services::validation();
        $user_id = CIAuth::id();


        //Validate the form
        if ($request->isAJAX()) {
            // Get rules
            $validateForm = $this->userProfileValidator->validateUserProfileForm();

            $this->validate($validateForm);

            if ($validation->run() == FALSE) {
                $errors = $validation->getErrors();
                return json_encode([
                    'status' => false,
                    'error' => $errors
                ]);
            }

            $data = [
                'name' => $request->getVar('name'),
                'gender' => $request->getVar('gender'),
                'birthdate' => $request->getVar('birthdate'),
                'mobile' => $request->getVar('mobile'),
                'alternative_contact' => $request->getVar('alternative_contact'),
                'social_fb' => $request->getVar('social_fb'),
                'social_instagram' => $request->getVar('social_instagram'),
                'social_twitter' => $request->getVar('social_twitter'),
                'address' => $request->getVar('address'),
            ];

            $user = new User();
            if (!$user->updateUserProfile($user_id, $data)) {
                return json_encode([
                    'status' => false,
                    'msg' => "Something went wrong. Please try again."
                ]);
            }

            $userInfo = $user->findUser('id', $user_id);

            return json_encode([
                'status' => true,
                'user' => [
                    'name' => $userInfo->name,
                    'address' => $userInfo->address,
                    'mobile' => $userInfo->mobile
                ],
                'msg' => "Your personal info has been successfully updated."
            ]);
        }
    }

    public function updatePassword()
    {
        $request = \Config\Services::request();
        // $validation = \Config\Services::validation();
        // $user_id = CIAuth::id();

        if ($request->isAJAX()) {
            $validation = \Config\Services::validation();
            $user_id = CIAuth::id();

            $validatePassword = $this->userProfileValidator->validateUserPasword();

            $this->validate($validatePassword);

            if ($validation->run() === FALSE) {
                $errors = $validation->getErrors();
                return json_encode([
                    'status' => false,
                    'token' => csrf_hash(),
                    'error' => $errors
                ]);
            }

            $new_password = $request->getVar('new_password');
            $user = new User();
            if (!$user->updateUserPassword('id', $user_id, $new_password)) {
                return json_encode([
                    'status' => false,
                    'token' => csrf_hash(),
                    'msg' => "Something went wrong. Please try again."
                ]);
            }
            $userInfo = $user->findUser('id', $user_id);

            $mail_data = [
                'user' => $userInfo,
                'new_password' => $new_password
            ];

            $emailSent = $this->emailService->sendEmail($userInfo, 'Password Changed', $mail_data, 'password-changed-email-template');

            if (!$emailSent) {
                return json_encode([
                    'status' => false,
                    'token' => csrf_hash(),
                    'msg' => "Something went wrong. Please try again."
                ]);
            }

            return json_encode([
                'status' => true,
                'token' => csrf_hash(),
                'msg' => 'Password is successfully changed.'
            ]);
        }
    }
}
