<?php 
namespace App\Models;

use CodeIgniter\Model;

class GudangModelAdmin extends Model
{
    protected $table          = 'barang';
    protected $allowedFields  = [
        'nama_barang',
        'satuan',
        'tipe',
        'kuantitas',
    ];
    protected $useTimestamps      = true;

    public function addDataBarang($data)
    {
        return $this->db->table('barang')->insert($data);
    }

    public function getBarang($id)
    {
        return $this->where(['id' => $id])->first();
    }

    public function ubahDataBarang($data)
    {
        return $this->db->table('barang')->replace($data);
    }
}
?>