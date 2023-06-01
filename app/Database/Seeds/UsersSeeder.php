<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'username' => 'rexdex',
            'password'    => 'password',
            'name' => 'zanuarRikza'
        ];

        // Simple Queries
        $this->db->query('INSERT INTO users (username, password, name) VALUES(:username:, :password:, :name:)', $data);

        // Using Query Builder
        $this->db->table('users')->insert($data);
    }
}
