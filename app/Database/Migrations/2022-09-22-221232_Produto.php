<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Produto extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pro' => [
            'type' => 'INT',
            'auto_increment' => true,
            'null' => false
            ],
            'nome' => [
            'type' => 'VARCHAR',
            'constraint' => 60,
            'null' => false
            ],
            'preco_comp' => [
            'type' => 'INTEGER',
            'null' => false
            ],
            'peso' => [
            'type' => 'INTEGER',
            'null' => false
            ],
            'sabor' => [
            'type' => 'VARCHAR',
            'constraint' => 30,
            'null' => false
            ], 
            'idade' => [
            'type' => 'VARCHAR',
            'constraint' => 10,
            'null' => false
            ],
            'porte_raca' => [
            'type' => 'VARCHAR',
            'constraint' => 10,
            'null' => false
            ],
            'validade' => [
            'type' => 'DATE',
            'null' => false
            ],
            'cod_barras' => [
            'type' => 'VARCHAR',
            'constraint' => 60,
            'null' => false
            ],
            'preco_ven' => [
            'type' => 'INTEGER',
            'null' => false
            ] ,
            'estoque_idestoque' => [
            'type' => 'INT',
            'null'=>false
            ] ,
            'raca_idraca' => [
            'type' => 'INT',
            'null' => false
            ] ,
            'pet_idpet' => [
            'type' => 'INT',
            'null' => false
            ]
            ]);
            $this->forge->addPrimaryKey('id_pro');
            $this->forge->addForeignKey ('estoque_idestoque', 'estoque', 'id_est');
            $this->forge->addForeignKey ('raca_idraca', 'raca', 'id_raca');
            $this->forge->addForeignKey ('pet_idpet', 'pet', 'id_pet');
            $this->forge->createTable('produto');
            
    }

    public function down()
    {
        //
    }
}
