<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TaskSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('tasks')->truncate();

        $now = date('Y-m-d H:i:s');
        $day = fn (int $offset): string => date('Y-m-d', strtotime("$offset days"));

        $this->db->table('tasks')->insertBatch([
            ['title' => 'Review for midterms',    'status' => 'done',        'task_date' => $day(0),  'created_at' => $now],
            ['title' => 'Finish laboratory activities',         'status' => 'in_progress', 'task_date' => $day(0),  'created_at' => $now],
            ['title' => 'Play games with my friends',             'status' => 'pending',     'task_date' => $day(0),  'created_at' => $now],
            ['title' => 'Deploy the app to free hosting',     'status' => 'pending',     'task_date' => $day(0),  'created_at' => $now],
            ['title' => 'Answer assignments',             'status' => 'done',        'task_date' => $day(-1), 'created_at' => $now],
            ['title' => 'Read chapter on CodeIgniter models', 'status' => 'done',        'task_date' => $day(-2), 'created_at' => $now],
            ['title' => 'Prepare for group meeting',          'status' => 'pending',     'task_date' => $day(1),  'created_at' => $now],
            ['title' => 'Advance study',                 'status' => 'pending',     'task_date' => $day(2),  'created_at' => $now],
            ['title' => 'Work on the capstone project', 'status' => 'pending',     'task_date' => $day(3),  'created_at' => $now],
        ]);
    }
}
