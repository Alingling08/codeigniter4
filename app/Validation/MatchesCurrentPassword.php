<?php

namespace App\Validation;

use App\Libraries\CIAuth;
use App\Libraries\Hash;
use App\Models\User;

class MatchesCurrentPassword
{
    public function matches_current_password($password): bool
    {
        $password = trim($password);
        $user_id = CIAuth::id();

        $user = new User();
        $user_info = $user->findUser('id',$user_id);

        return Hash::check($password, $user_info->password);
    }
}
