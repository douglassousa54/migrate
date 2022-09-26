<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Venda extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_ven' => [
            'type' => 'INT',
            'auto_increment' => true,
            'null' => false
            ],
            'forma_pag' => [
            'type' => 'VARCHAR',
            'constraint' => 20,
            'null' => false
            ],
            'quan_comp' => [
            'type' => 'INTEGER',
            'null' => false
            ]
            ]);
            $this->forge->addPrimaryKey('id_ven');
            $this->forge->createTable('venda');
    }

    public function down()
    {
        //
    }
}
