<?php

namespace App\Libraries;

// Make hash password and compare requested and stored password
class Hash
{
    public static function make($password)
    {
        return password_hash($password, PASSWORD_BCRYPT);
    }

    public static function check($password, $db_hashed_password)
    {
        return password_verify($password, $db_hashed_password);
    }
}
