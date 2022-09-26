<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Administrador extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_adm' => [
            'type' => 'INT',
            'auto_increment' => true,
            'null' => false
            ],
            'usuario_adm' => [
            'type' => 'VARCHAR',
            'constraint' => 45,
            'null' => false,
            'unique'=> true
            ],
            'senha_adm' => [
            'type' => 'VARCHAR',
            'constraint' => 45,
            'null' => false
            ],
            'nome_adm' => [
            'type' => 'VARCHAR',
            'constraint' => 45,
            'null' => false
            ],
            'sobrenome_adm' => [
            'type' => 'VARCHAR',
            'constraint' => 45,
            'null' => false
            ],
            'email_adm' => [
            'type' => 'VARCHAR',
            'constraint' => 45,
            'null' => false
            ] ,
            'numero_adm' => [
            'type' => 'INTEGER',
            'null' => false
            ] ,
            'complemento_adm' => [
            'type' => 'VARCHAR',
            'constraint' => 45,
            'null' => false
            ] ,
            'telefone_adm' => [
            'type' => 'CHAR',
            'constraint' => 10,
            'null' => false
            ] ,
            'celular_adm' => [
            'type' => 'CHAR',
            'constraint' => 11,
            'null' => false
            ] ,
            'cpf_adm' => [
            'type' => 'CHAR',
            'constraint' => 11,
            'null' => false,
            'unique'=> true
            ],
            'endereco_idendereco' => [
            'type' => 'INT',
            'null' => false
            ]
            ]);
            $this->forge->addPrimaryKey('id_adm');
            $this->forge->addForeignKey ('endereco_idendereco', 'endereco', 'id_end');
            $this->forge->createTable('administracao');
    }

    public function down()
    {
        //
    }
}
