<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

/**
 * 
 * Commands
 * To Create the Migration file: php spark migration:create sample
 * To run all the Migration at a time: php spark migration
 * To roll back single/all the Migration : php spark migration:rollback
 * 
 * Run this Command this gives the option to run specific file at a time :
 * php spark make:command MigrateFile --command migrate:file --group Database --suffix Command
 * 
 * Then run this command to run a specific migration file :
 * To run a single migration file : php spark migrate:file "app\Database\Migrations\2022-03-13-172614_Sample.php"
 * 
 */
class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => true
            ],
            'firstname' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ],
            'lastname' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ],
            'pass_word' => [
                'type' => 'VARCHAR',
                'constraint' => 500
            ],
            'phone' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ],
            'dob' => [
                'type' => 'DATE',
            ],
            'age' => [
                'type' => 'INT',
                'constraint' => 5
            ],
           
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('users_table');
    }

    public function down()
    {
        $this->forge->dropTable('users_table');
    }
}
