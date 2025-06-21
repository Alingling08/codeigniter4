<?php

namespace App\Models;

use CodeIgniter\Model;

class PasswordResetToken extends Model
{
    protected $table            = 'password_reset_tokens';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['email', 'token', 'created_at'];

    public function __construct()
    {
        parent::__construct();
        helper(['time']);
    }

    public function checkPasswordResetTokenByEmail(string $value): ?object
    {
        $passwordResetTokenModel = new PasswordResetToken();
        return $passwordResetTokenModel->asObject()->where('email', $value)->first();
    }

    public function checkPasswordResetTokenByToken(string $value): ?object
    {
        $passwordResetTokenModel = new PasswordResetToken();
        return $passwordResetTokenModel->asObject()->where('token', $value)->first();
    }

    public function updatePasswordToken(string $value, string $token): bool
    {
        $passwordResetTokenModel = new PasswordResetToken();
        return $passwordResetTokenModel
            ->where('email', $value)
            ->set([
                'token' => $token,
                'created_at' => current_time()
            ])
            ->update();
    }

    public function insertPasswordToken(string $value, string $token): bool
    {
        $passwordResetTokenModel = new PasswordResetToken();
        return $passwordResetTokenModel
            ->insert([
                'email' => $value,
                'token' => $token,
                'created_at' => current_time()
            ]);
    }

    public function deletePasswordTokenByEmail(string $value): bool
    {
        $passwordResetTokenModel = new PasswordResetToken();
        return $passwordResetTokenModel->where('email', $value)->delete();
    }
}
