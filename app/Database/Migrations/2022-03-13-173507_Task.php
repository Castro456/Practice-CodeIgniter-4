<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Task extends Migration
{
    public function up()
    {
        $this->forge->addField([ //to initialize forge, database drive must be running 
            'id' => [
                'type' => 'INT',
                'auto_increment' => true
            ],
            'task' => [
                'type' => 'VARCHAR',
                'constraint' => 100 // size
            ],
            'time_kept' => [
                'type' => 'TIMESTAMP',
                'constraint' => 6
            ],
            'user' => [
                'type' => 'INT',
                'constraint' => 10
            ],
            'progress' => [
                'type' => 'ENUM("In progress","Done")',
                'default' => 'In progress',
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('user', 'user', 'id'); //1. user - is the column name, 2. user - is the other table name, 3. id - is the other table primary key.
        $this->forge->createTable('task_table');
    }

    public function down()
    {
        $this->forge->dropTable('task_table'); // used while using rollback
    }
}
