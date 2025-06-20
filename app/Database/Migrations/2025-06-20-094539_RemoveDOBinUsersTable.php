<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RemoveDOBinUsersTable extends Migration
{
    public function up()
    {
        // Remove the column
        $this->forge->dropColumn('users', 'dateofbirth');
    }

    public function down()
    {
        // Optional: Re-add the column in rollback
        $this->forge->addColumn('users', [
            'dateofbirth' => [
                'type' => 'DATE',
                'null' => true,
            ]
        ]);
    }
}
