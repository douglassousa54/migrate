<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ClienteEVenda extends Migration
{
    public function up()
    {
        $this->forge->addField([
        'id_cli_ven' => [
            'type' => 'INT',
            'auto_increment' => true,
            'null' => false
            ],
            'venda_idvenda' => [
            'type' => 'INT',
            'null' => false
            ],
            'cliente_idcliente' => [
            'type' => 'INT',
            'null' => false
            ]
            ]);
            $this->forge->addPrimaryKey('id_cli_ven');
            $this->forge->addForeignKey ('venda_idvenda', 'venda', 'id_ven');
            $this->forge->addForeignKey ('cliente_idcliente', 'cliente', 'id_cliente');
            $this->forge->createTable('cliente_e_venda');
            
    }

    public function down()
    {
        //
    }
}
