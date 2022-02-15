<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class OperasionalSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'proyek' => 'Proyek Instalasi Gedung',
            'lokasi' => 'padang',
            'tanggal' => '12/12/2001',
            'w_berangkat' => '12/12/2001',
            'w_pulang' => '12/12/2001',
            'transport' => 20000,
            'tol' => 20000,
            'parkir' => 2000,
            'makan' => 20000,
            'lainnya' => 20000,
            'keterangan' => 'ajaaja',
        ];
        $this->db->table('operasional')->insert($data);
    }
}
