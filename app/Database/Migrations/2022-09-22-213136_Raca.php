<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Raca extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_raca' => [
            'type' => 'INT',
            'auto_increment' => true,
            'null' => false
            ],
            'raca' => [
            'type' => 'VARCHAR',
            'null' => false
            ]
            ]);
            $this->forge->addPrimaryKey('id_raca');
            $this->forge->createTable('raca');
            
    }

    public function down()
    {
        //
    }
}
