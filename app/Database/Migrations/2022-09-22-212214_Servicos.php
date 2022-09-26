<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Servicos extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_serv' => [
            'type' => 'INT',
            'auto_increment' => true ,
            'null' => false
            ],

            'nome_serv' => [
            'type' => 'VARCHAR',
            'constraint' => 30,
            'null' => false
            ],
            'descricao_serv' => [
            'type' => 'VARCHAR',
            'constraint' => 30,
            'null' => false
            ]
            ]);
            $this->forge->addPrimaryKey('id_serv');
            $this->forge->createTable('servicos');
    }

    public function down()
    {
        //
    }
}
