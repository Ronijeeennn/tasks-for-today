<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('users')->truncate();

        // Exactly ONE demo user.
        $this->db->table('users')->insert([
            'username'   => 'ronijen',
            'full_name'  => 'Ronijen A. Antonio',
            'email'      => 'raantonio1@fit.edu.ph',
            'created_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
