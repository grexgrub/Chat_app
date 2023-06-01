<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pesan extends Migration
{
    public function up()
    {
    $this->forge->addField([
      'dari' => [
        'type' => 'varchar',
        'constraint' => 100,
        'null' => false,
      ],
      'ke' => [
        'type' => 'varchar',
        'constraint' => 100,
        'null' => false,
      ],
      'pesan' => [
        'type' => 'text',
        'null' => false
      ],
      'created_at' => [
        'type' => 'date',
        'null' => true,
      ],
      'updated_at' => [
        'type' => 'date',
        'null' => true,
      ]
    ]);
    $this->forge->createTable('pesan');
    }

    public function down()
    {
    $this->forge->dropTable('pesan'); 
    }
}
