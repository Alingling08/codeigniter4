<?php

namespace App\Models;

use App\Libraries\Hash;

use CodeIgniter\Model;

class User extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $allowedFields    = [
        'name',
        'email',
        'password',
        'gender',
        'birthdate',
        'mobile',
        'alternative_contact',
        'social_fb',
        'social_instagram',
        'social_twitter',
        'address'
    ];

    public function findByIdentity(string $field, string $value): ?array
    {
        $userModel = new User();
        return $userModel->where($field, $value)->first();
    }

    public function findUser(string $field, string $value): ?object
    {
        $userModel = new User();
        return $userModel->asObject()->where($field, $value)->first();
    }

    public function findById(string $value): ?object
    {
        $userModel = new User();
        return $userModel->asObject()->where('id', $value)->first();
    }

    public function updateUserPassword(string $field, string $value, string $password): bool
    {
        $userModel = new User();
        return $userModel
            ->where($field, $value)
            ->set([
                'password' => Hash::make($password)
            ])
            ->update();
    }

    // public function updateUserPasswordById(string $value, string $password): bool
    // {
    //     $userModel = new User();
    //     return $userModel->update($value, [
    //         'password' => Hash::make($password)
    //     ]);
    // }

    public function updateUserProfile($id, $data): bool
    {
        $userModel = new User();
        return $userModel->where('id', $id)
            ->set($data)
            ->update();
    }
}
