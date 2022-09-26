<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AgendaEVenda extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_agen_ven' => [
                'type' => 'INT',
                'auto_increment' => true,
                'null' => false
                ],
                'agenda_idage' => [
                'type' => 'INT',
                'null' => false
                ],
                'venda_idven' => [
                'type' => 'INT',
                'null' => false
                ]
                ]);
                $this->forge->addPrimaryKey('id_agen_ven');
                $this->forge->addForeignKey ('venda_idven', 'venda', 'id_ven');
                $this->forge->addForeignKey ('agenda_idage', 'agenda', 'id_age');
                $this->forge->createTable('agenda_e_venda');
                
    }

    public function down()
    {
        //
    }
}
