<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Estoque extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_est' => [
            'type' => 'INT',
            'auto_increment' => true,
            'null' => false
            ],
            'quant' => [
            'type' => 'INTEGER',
            'null' => false
            ],
            'posicao' => [
            'type' => 'VARCHAR',
            'constraint' => 15,
            'null' => false
            ]
            ]);
            $this->forge->addPrimaryKey('id_est');
            $this->forge->createTable('estoque');
            
    }

    public function down()
    {
        //
    }
}
