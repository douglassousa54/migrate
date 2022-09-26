<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pets extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pet' => [
            'type' => 'INT',
            'auto_increment' => true,
            'null' => false
            ],
            'nome_pet' => [
            'type' => 'VARCHAR',
            'constraint' => 20,
            'null' => false
            ]
            ]);
            $this->forge->addPrimaryKey('id_pet');
            $this->forge->createTable('pet');
            
    }

    public function down()
    {
        //
    }
}
