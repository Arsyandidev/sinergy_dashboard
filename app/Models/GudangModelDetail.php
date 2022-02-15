<?php 
namespace App\Models;

use CodeIgniter\Model;

class GudangModelDetail extends Model
{
    protected $table          = 'detailPermintaan';
    protected $allowedFields  = [
        'nama_barang',
        'satuan',
        'tipe',
        'kuantitas',
        'id_permintaan'
    ];
    protected $useTimestamps      = true;

    public function addDataBarang($data)
    {
        return $this->db->table('detailPermintaan')->insert($data);
    }

    public function getBarang($id)
    {
        return $this->where(['id' => $id])->first();
    }

    public function ubahDataBarang($data)
    {
        return $this->db->table('detailPermintaan')->update($data);
    }
}
?>