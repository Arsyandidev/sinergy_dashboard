<?php

namespace App\Models;

use CodeIgniter\Model;

class OperasionalModel extends Model
{
    protected $table            = 'operasionals';
    protected $allowedFields    = [
        'proyek', 'lokasi', 'w_berangkat', 'w_pulang', 'transport', 'tol', 'parkir', 'makan', 'lainnya', 'keterangan', 'status_gm', 'status_fm'
    ];
    protected $useTimestamps = true;

    public function verifikasi($data)
    {
        return $this->db->table('operasionals')->update($data);
    }
}
