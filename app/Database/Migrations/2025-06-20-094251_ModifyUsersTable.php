<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ModifyUsersTable extends Migration
{
    public function up()
    {
        $this->forge->addColumn('users', [
            'birthdate' => [
                'type' => 'DATE',
                'null' => true,
                'after' => 'email', // optional, to place the column after another
            ]
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('users', 'birthdate');
    }
}
