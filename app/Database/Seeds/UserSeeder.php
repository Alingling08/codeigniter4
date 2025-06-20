<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = array(
            'name' => 'Admin',
            'email' => 'admin@email.com',
            'username' => 'admin',
            'password' => password_hash('12345', PASSWORD_BCRYPT),
            'gender' => 'female',
            'birthdate' => '1994-01-01',
            'mobile' => '09102364597',
            'alternative_contact' => '9179874',
            'social_fb' => 'scorpiohub',
            'social_instagram' => '@scorpiohub',
            'social_twitter' => '@scorpiohub',
            'address' => 'Dipolog City, 7100, Zamboanga del Norte',
        );

        $this->db->table('users')->insert($data);
    }
}
