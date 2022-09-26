<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Cliente extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_cliente' => [
            'type' => 'INT',
            'auto_increment' => true,
            'null' => false
            ],
            'nome_cli' => [
            'type' => 'VARCHAR',
            'constraint' => 20,
            'null' => false
            ],
            'sobrenome_cli' => [
            'type' => 'VARCHAR',
            'constraint' => 25,
            'null' => false
            ],
            'data_nasc_cli' => [
            'type' => 'DATE',
            'null' => false
            ],
            'usuario_cli' => [
            'type' => 'VARCHAR',
            'constraint' => 45,
            'null' => false,
            'unique'=>true
            ], 
            'senha_cli' => [
            'type' => 'VARCHAR',
            'constraint' => 8,
            'null' => false
            ],
            'cpf_for' => [
            'type' => 'CHAR',
            'constraint' => 11,
            'null' => false,
            'unique'=> true
            ],
            'numero_cli' => [
            'type' => 'INTEGER',
            'null' => false
            ],
            'email_cli' => [
            'type' => 'VARCHAR',
            'constraint' => 45,
            'null' => false
            ],
            'telefone_cli' => [
            'type' => 'CHAR',
            'constraint' => 10,
            ] ,
            'celular_cli' => [
            'type' => 'CHAR',
            'constraint' => 11,
            'null'=>false
            ] ,
            'endereco_idendereco' => [
            'type' => 'INT',
            'null' => false
            ]
            ]);
            $this->forge->addPrimaryKey('id_cliente');
            $this->forge->addForeignKey ('endereco_idendereco', 'endereco', 'id_end');
            $this->forge->createTable('cliente');
    }

    public function down()
    {
        //
            
    }
}
