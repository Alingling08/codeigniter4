<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'picture' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'gender'        => [
                'type'       => "ENUM('male','female','non-binary','not-to-say')",
                'null'       => false,
                'default'    => 'not-to-say',
            ],
            'mobile' => [
                'type' => 'VARCHAR',
                'constraint' => '20'
            ],
            'alternative_contact' => [
                'type' => 'VARCHAR',
                'constraint' => '20'
            ],
            'social_fb' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'social_instagram' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'social_twitter' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'address' => [
                'type' => 'TEXT',
                'null' => true
            ],
            'bio' => [
                'type' => 'TEXT',
                'null' => true
            ],
            'created_at timestamp default current_timestamp',
            'updated_at timestamp default current_time on update current_timestamp'
        ]);


        $this->forge->addKey('id', true); //Primary Key
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
