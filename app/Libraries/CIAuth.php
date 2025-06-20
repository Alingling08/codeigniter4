<?php

namespace App\Libraries;

use App\Models\User;

class CIAuth
{
    //Store an authenticated admin details in sessions
    public static function setCIAuth($result)
    {
        $session = session();
        $array = ['logged_in' => true];
        $userdata = $result;
        $session->set('userdata', $userdata);
        $session->set($array);
    }

    public static function id()
    {
        // Return an authenticated admin value
        $session = session();
        return ($session->has('logged_in') && $session->has('userdata'))
            ? $session->get('userdata')['id'] ?? null
            : null;
    }

    public static function check()
    {
        // Check if authenticated admin is found
        $session = session();
        return $session->has('logged_in');
    }

    public static function forget()
    {
        //Remove an authenticated session data
        $session = session();
        $session->remove('logged_in');
        $session->remove('userdata');
    }

    public static function user()
    {
        //Return all logged-in admin details
        $session = session();
        if (($session->has('logged_in') && $session->has('userdata'))) {
            $user = new User();
            return $user->findUser('id',CIAuth::id());
        } else {
            return null;
        }
    }
}
