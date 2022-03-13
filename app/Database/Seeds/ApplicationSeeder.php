<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

/**
 * 
 * Command
 * To create a seed :  php spark make:seeder ApplicationSeeder
 * To run a seed : php spark db:seed ApplicationSeeder
 * 
 */

class ApplicationSeeder extends Seeder
{
    public function run()
    {
        $user = [
            'firstname' => 'Castro',
            'lastname' => 'MS',
            'email' => 'castro@outlook.com',
            'pass_word' => 'sample_pass',
            'phone' => '9865412135',
            'dob' => '2000/12/12',
            'age' => '21'
        ];

        $my_time = new Time('now');
        $task = [
            'task' => 'Hello World',
            'time_kept' => $my_time,
            'user' => '1',
            'progress' => '1'
        ];

        $this->db->table('user')->insert($user);
        $this->db->table('task')->insert($task);
    }
}
