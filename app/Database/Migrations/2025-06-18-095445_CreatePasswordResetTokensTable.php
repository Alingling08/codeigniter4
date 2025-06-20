<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePasswordResetTokensTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'token' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'created_at timestamp default current_timestamp'
        ]);

        $this->forge->addKey('id', true); //Primary Key
        $this->forge->createTable('password_reset_tokens');
    }

    public function down()
    {
        $this->forge->dropTable('password_reset_tokens');
    }
}
