<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Obat extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_obat'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_obat'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'jenis_obat' => [
                'type'          => 'VARCHAR',
                'constraint'    => '255'
            ],
            'harga' => [
                'type'          => 'VARCHAR',
                'constraint'    => '255'
            ],
            'deskripsi' => [
                'type'          => 'VARCHAR',
                'constraint'    => '255'
            ],
            'sampul' => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
                'null'          => TRUE
            ],
            'created_at' => [
                'type'  => 'DATETIME',
                'null'  => TRUE
            ],
            'updated_at' => [
                'type'  => 'DATETIME',
                'null'  => TRUE
            ]
        ]);
        $this->forge->addKey('id_obat', true);
        $this->forge->createTable('obat');
    }

    public function down()
    {
        $this->forge->dropTable('orang');
    }
}
