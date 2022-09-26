<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Agenda extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_age' => [
                'type' => 'INT',
                'auto_increment' => true,
                'null' => false
                ],
                'data_2' => [
                'type' => 'DATE',
                'null' => false
                ],
                'horario_age' => [
                'type' => 'TIME',
                'null' => false
                ],
                'servicos_idservicos' => [
                'type' => 'int',
                'null' => false
                ]
                ]);
                $this->forge->addPrimaryKey('id_age');
                $this->forge->addForeignKey ('servicos_idservicos', 'servicos', 'id_serv');
                $this->forge->createTable('agenda');
                
    }

    public function down()
    {
        //
    }
}
