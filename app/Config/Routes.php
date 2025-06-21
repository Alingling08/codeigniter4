<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


//Non-Authenticated admin
$routes->group('', ['filter' => 'cifilter:guest'], static function ($routes) {
    // $routes->view('example-auth', 'example-auth');
    $routes->get('login', 'AuthController::loginForm', ['as' => 'login.form']);
    $routes->post('login', 'AuthController::loginHandler', ['as' => 'login.handler']);

    $routes->get('forgot-password', 'AuthController::forgotPasswordForm', ['as' => 'forgot.form']);
    $routes->post('send-password-reset-link', 'AuthController::sendPasswordResetLink', ['as' => 'send_password_reset_link']);

    $routes->get('reset-password/(:any)', 'AuthController::resetPassword/$1', ['as' => 'reset-password']);
    $routes->post('reset-password/(:any)', 'AuthController::resetPasswordHandler/$1', ['as' => 'reset-password-handler']);

    $routes->get('signup', 'AuthController::signUpForm', ['as' => 'signup.form']);
});

$routes->group('', ['filter' => 'cifilter:auth'], static function ($routes) {
    $routes->get('logout', 'AuthController::logoutHandler', ['as' => 'logout']);
});

$routes->group('admin', static function ($routes) {
    //Authenticated admin
    $routes->group('', ['filter' => 'cifilter:auth'], static function ($routes) {
        $routes->get('', 'AdminController::index'); // for /crm
        $routes->get('home', 'AdminController::index', ['as' => 'admin.home']);
        $routes->get('profile', 'AdminController::profile', ['as' => 'admin.profile']);
        $routes->post('profile-update', 'AdminController::updatePersonalInfo', ['as' => 'admin.profile.update']);
        $routes->post('profile-change-password', 'AdminController::updatePassword', ['as' => 'admin.profile.change-password']);
    });
});

$routes->group('crm', static function ($routes) {
    $routes->group('', ['filter' => 'cifilter:auth'], static function ($routes) {
        $routes->get('', 'AdminCRMController::index'); // for /crm
        $routes->get('add-contact', 'AdminCRMController::addContact', ['as' => 'crm.add-contact']); // for /crm
        $routes->get('download-leads-csv', 'AdminCRMController::downloadLeadsCSV', ['as' => 'crm.download-leads-csv']);
        $routes->get('download-leads-excel', 'AdminCRMController::downloadLeadsEXCEL', ['as' => 'crm.download-leads-excel']);
        $routes->get('download-leads-pdf', 'AdminCRMController::downloadLeadsPDF', ['as' => 'crm.download-leads-pdf']);
    });
});
