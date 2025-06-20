<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Libraries\CIAuth;
use App\Libraries\EmailService;
use App\Libraries\Hash;
use App\Models\PasswordResetToken;
use App\Models\User;
use App\Services\AuthService;
use CodeIgniter\HTTP\ResponseInterface;
use \Exception;



class AuthController extends BaseController
{
    protected $helpers = ['url', 'form', 'CIMail', 'SendEmail', 'CIFunction'];
    protected $authService;
    protected $emailService;

    public function __construct()
    {
        $this->authService = new AuthService();
        $this->emailService = new EmailService();
    }

    public function loginForm()
    {
        $data = [
            'pageTitle' => 'Login | Scorpio Hub',
            'validation' => null
        ];

        return view('pages/auth/login', $data);
    }

    public function loginHandler()
    {
        $identityInput  = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        // Detect identity type
        $identityType = $this->authService->detectIdentityType($identityInput);

        // Get rules
        $rules = $this->authService->getLoginValidationRules($identityType);

        if (! $this->validate($rules)) {
            return view('pages/auth/login', [
                'pageTitle' => 'Login',
                'validation' => $this->validator
            ]);
        }

        $user = new User();
        $userInfo = $user->findByIdentity($identityType, $identityInput);

        if (!$this->authService->checkPassword($password, $userInfo['password'])) {
            return redirect()->route('login.form')->with('password', 'Wrong password')->withInput();
        }

        // Login user
        $this->authService->loginUser($userInfo);
        return redirect()->route('admin.home');
    }

    public function signUpForm()
    {
        $data = [
            'pageTitle' => 'Sign Up | Scorpio Hub',
            'validation' => null
        ];

        return view('pages/auth/signup', $data);
    }

    public function logoutHandler()
    {
        $this->authService->logoutUser();
        return redirect()->route('login.form')->with('fail', 'You are logged out.');
    }

    public function forgotPasswordForm()
    {
        $data = [
            'pageTitle' => 'Forgot Password | Scorpio Hub',
            'validation' => null
        ];

        return view('pages/auth/forgotpassword', $data);
    }

    public function sendPasswordResetLink()
    {
        $email  = $this->request->getVar('email');
        $rules = $this->authService->validateEmail();

        if (! $this->validate($rules)) {
            return view('pages/auth/forgotpassword', [
                'pageTitle' => 'Forgot Password | Scorpio Hub',
                'validation' => $this->validator,
            ]);
        }

        $user = new User();
        $userInfo = $user->findUser('email', $email);

        $token = $this->authService->getResetPasswordToken($email);
        $route = 'reset-password';

        $this->sendResetPasswordLink($route, $token, $userInfo);
    }


    public function sendResetPasswordLink($route, $token, $userInfo)
    {
        //Action Link
        $actionLink = base_url(route_to($route, $token));
        $mail_data = [
            'actionLink' => $actionLink,
            'user' => $userInfo
        ];

        $emailSent = $this->emailService->sendEmail($userInfo, 'Password Reset', $mail_data, 'forgot-email-template');

        if (!$emailSent) {
            return redirect()->route('forgot.form')->with('fail', 'Something with wrong. Please try again.');
        }
        return redirect()->route('forgot.form')->with('success', 'We have e-mailed your password reset link.');
    }

    public function resetPassword($token)
    {
        $check_token = $this->authService->checkTokenifValid($token);

        if (!$check_token) {
            return redirect()->route('forgot.form')->with('fail', 'Invalid token or token has expired. Request another reset password link.');
        }

        return view('pages/auth/reset', [
            'pageTitle' => 'Reset Password',
            'validation' => null,
            'token' => $token
        ]);
    }

    public function resetPasswordHandler($token)
    {
        $passwordRules = $this->authService->validatePassword();

        if (!$this->validate($passwordRules)) {
            return view('pages/auth/reset', [
                'pageTitle' => 'Reset Password | ' . env('COMPANY_NAME'),
                'validation' => $this->validator,
                'token' => $token
            ]);
        }

        //Get token details
        $passwordResetTokenModel = new PasswordResetToken();
        $tokenInfo = $passwordResetTokenModel->checkPasswordResetTokenByToken($token);

        if (!$tokenInfo) {
            return redirect()->back()->with('fail', 'Invalid token.')->withInput();
        }

        $user = new User();
        $userInfo = $user->findUser('email', $tokenInfo->email);

        if (!$userInfo) {
            return redirect()->back()->with('fail', 'User does not exist.')->withInput();
        }
        $new_password = $this->request->getVar('new_password');

        if (!$user->updateUserPassword('email', $tokenInfo->email, $new_password)) {
            return redirect()->back()->with('fail', 'Something wrong. Please try again.')->withInput();
        }

        $mail_data = [
            'user' => $userInfo,
            'new_password' => $new_password
        ];

        $emailSent = $this->emailService->sendEmail($userInfo, 'Password Changed', $mail_data, 'password-changed-email-template');

        if (!$emailSent) {
            return redirect()->route('forgot.form')->with('fail', 'Something went wrong. Please try again.');
        }

        $passwordResetTokenModel->deletePasswordTokenByEmail($userInfo->email);

        return redirect()->route('login.form')->with('success', 'Your password has been changed. Use your new password to login.');
    }
}
