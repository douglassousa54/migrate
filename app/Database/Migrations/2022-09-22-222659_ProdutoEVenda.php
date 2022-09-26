<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ProdutoEVenda extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pro_ven' => [
                'type' => 'INT',
                'auto_increment' => true,
                'null' => false
                ],
                'venda_idvenda' => [
                'type' => 'INT',
                'null' => false
                ],
                'produto_idproduto' => [
                'type' => 'INT',
                'null' => false
                ]
                ]);
                $this->forge->addPrimaryKey('id_pro_ven');
                $this->forge->addForeignKey ('venda_idvenda', 'venda', 'id_ven');
                $this->forge->addForeignKey ('produto_idproduto', 'produto', 'id_pro');
                $this->forge->createTable('produto_e_venda');

                
    }

    public function down()
    {
        //
    }
}
