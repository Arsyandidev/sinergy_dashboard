<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Operasional extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'constraint' => 10,
                'auto_increment' => true,
                'unsigned' => true,
            ],
            'proyek' => [
                'type' => 'varchar',
                'constraint' => 100,
                'null' => true,
            ],
            'lokasi' => [
                'type' => 'varchar',
                'constraint' => 255,
                'null' => true,
            ],
            'tanggal' => [
                'type' => 'datetime',
                'null' => true,
            ],
            'w_berangkat' => [
                'type' => 'datetime',
                'null' => true,
            ],
            'w_pulang' => [
                'type' => 'datetime',
                'null' => true,
            ],
            'transport' => [
                'type' => 'int',
                'constraint' => 20,
                'null' => true,
            ],
            'tol' => [
                'type' => 'int',
                'constraint' => 20,
                'null' => true,
            ],
            'parkir' => [
                'type' => 'int',
                'constraint' => 20,
                'null' => true,
            ],
            'makan' => [
                'type' => 'int',
                'constraint' => 20,
                'null' => true,
            ],
            'lainnya' => [
                'type' => 'varchar',
                'constraint' => 20,
                'null' => true,
            ],
            'keterangan' => [
                'type' => 'varchar',
                'constraint' => 100,
                'null' => true,
            ],
            'status_gm' => [
                'type' => 'boolean',
                'default' => 1,
                'null' => true,
            ],
            'status_fm' => [
                'type' => 'boolean',
                'default' => 1,
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id');
        $this->forge->createTable('operasional');
    }

    public function down()
    {
        $this->forge->dropTable('operasional');
    }
}
