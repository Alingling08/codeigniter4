<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateLeadsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'             => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'first_name'     => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'last_name'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'       => true,
            ],
            'email'          => [
                'type'       => 'VARCHAR',
                'constraint' => '150',
                'unique'     => true,
            ],
            'phone'          => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
                'null'       => true,
            ],
            'company'        => [
                'type'       => 'VARCHAR',
                'constraint' => '150',
                'null'       => true,
            ],
            'source'         => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'       => true,
                'comment'    => 'e.g. website, referral, ad campaign',
            ],
            'status'         => [
                'type'       => 'ENUM',
                'constraint' => ['new', 'contacted', 'qualified', 'lost', 'converted'],
                'default'    => 'new',
            ],
            'notes'          => [
                'type'       => 'TEXT',
                'null'       => true,
            ],
            'assigned_to'    => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
                'null'       => true,
                'comment'    => 'User ID of the assigned sales rep',
            ],

            'deleted_at'     => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'created_at timestamp default current_timestamp',
            'updated_at timestamp default current_time on update current_timestamp'
        ]);

        $this->forge->addKey('id', true); // Primary key
        $this->forge->createTable('leads');
    }

    public function down()
    {
        $this->forge->dropTable('leads');
    }
}
