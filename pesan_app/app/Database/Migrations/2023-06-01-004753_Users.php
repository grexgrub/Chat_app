<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
    $this->forge->addField([
      'username' =>[
        'type' => 'varchar',
        'constraint' => 255,
        'null' => false,
      ],
      'password' => [
        'type' => 'varchar',
        'constraint' => 100,
        'null' => false,
      ],
      'info' => [
        'type' => 'varchar',
        'constraint' => 100,
        'null' => true,
      ],
      'name' => [
        'type' => 'varchar',
        'constraint' => 100,
        'null' => false,
      ],
      'photoProfile' => [
        'type' => 'varchar',
        'constraint' => 255,
        'default' => 'blankpp.jpeg',
        'null' => true
      ]
    ]);
    $this->forge->addKey('username', true);
    $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
