<?php

namespace App\Validation;

class IsPasswordStrong
{
    public function is_password_strong($password): bool
    {
        $password = trim($password);
        return preg_match('/(?=.*[\W])(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{5,20}$/', $password);
    }
}
