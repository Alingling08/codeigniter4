<?php

use App\Libraries\CIAuth;
use App\Models\User;


if (!function_exists('get_user')) {
    function get_user()
    {
        if (CIAuth::check()) {
            $user = new User();
            return $user->findUser('id',CIAuth::check());
        } else {
            return null;
        }
    }
}
