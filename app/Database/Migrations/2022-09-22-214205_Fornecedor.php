<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Fornecedor extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_for' => [
            'type' => 'INT',
            'auto_increment' => true,
            'null' => false
            ],
            'nome_for' => [
            'type' => 'VARCHAR',
            'constraint' => 45,
            'null' => false
            ],
            'cnpj_for' => [
            'type' => 'VARCHAR',
            'constraint' => 14,
            'null' => false,
            'unique'=> true
            ],
            'numero_for' => [
            'type' => 'INTEGER',
            'null' => false
            ],
            'email_for' => [
            'type' => 'VARCHAR',
            'constraint' => 45,
            'null' => false
            ],
            'telcontato1_for' => [
            'type' => 'VARCHAR',
            'constraint' => 11,
            'null' => false
            ] ,
            'telcontato2_for' => [
            'type' => 'VARCHAR',
            'constraint' => 11,
            ] ,
            'endereco_idendereco' => [
            'type' => 'INT',
            'null' => false
            ]
            ]);
            $this->forge->addPrimaryKey('id_for');
            $this->forge->addForeignKey ('endereco_idendereco', 'endereco', 'id_end');
            $this->forge->createTable('fornecedor');
    }

    public function down()
    {
        //
    }
}
