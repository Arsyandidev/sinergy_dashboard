<?php

namespace App\Controllers;
use App\Models\GudangModel;
use App\Models\GudangModelAdmin;
use App\Models\GudangModelDetail;
use App\Controllers\BaseController;

class Gudang extends BaseController
{
    protected $GudangModel;
    public function __construct()
    {
        $this->GudangModel = new GudangModel();
        $this->GudangModelAdmin = new GudangModelAdmin();
        $this->GudangModelDetail = new GudangModelDetail();
    }

    // Umum

    public function index()
    {
        $barang = $this->GudangModelAdmin->orderBy('update_at','DESC');
        $barang = $this->GudangModelAdmin->findAll();
        $data = ["title" => 'Sinergy | Gudang',
        "barang" => $barang
        ];
        return view('gudang/data_gudang', $data);
    }

    public function permintaanBarang()
    {
        $PermintaanBarang = $this->GudangModel->orderBy('created_at','DESC');
        $PermintaanBarang = $this->GudangModel->findAll();
        $data = [
            "title" => 'Sinergy | Permintaan Barang',
            "PermintaanBarang" => $PermintaanBarang
        ];
        return view('gudang/permintaan_barang',$data);
        
    }
    
    public function tambah()
    {
        $data = [
            'proyek' => $this->request->getPost('proyek'),
            'lokasi' => $this->request->getPost('lokasi'),
            'tanggal_pengajuan' => $this->request->getPost('tanggal_pengajuan'),
            'tanggal_pengembalian' => $this->request->getPost('tanggal_pengembalian'),
        ];

        $this->GudangModel->addData($data);
        return redirect()->to(base_url('gudang/permintaanBarang'));
    }

    public function ubah($id)
    {
        $data = [
            "title" => 'Sinergy | Ubah Form Permintaan Barang',
            'permintaan' => $this->GudangModel->getPermintaan($id)
        ];
        echo view('gudang/V_ubahPermintaanBarang',$data);
    }

    public function update($id)
    {
        $data = [
            'id' => $this->request->getPost('id'),
            'proyek' => $this->request->getPost('proyek'),
            'lokasi' => $this->request->getPost('lokasi'),
            'tanggal_pengajuan' => $this->request->getPost('tanggal_pengajuan'),
            'tanggal_pengembalian' => $this->request->getPost('tanggal_pengembalian'),
        ];
        $this->GudangModel->ubahData($data);
        return redirect()->to(base_url('gudang/permintaanBarang'));
    }

    public function hapus($id)
    {

        $this->GudangModel->delete($id);
        return redirect()->to(base_url('gudang/permintaanBarang'));
    }

    // Detail Barang

    public function detail($id)
    {
        $barang = $this->GudangModelDetail->where('id_permintaan', $id)->findAll();
        $permintaan = $this->GudangModel->where('id', $id)->findAll();
        $nama_barang = $this->GudangModelAdmin->findColumn('nama_barang');
        $satuan = $this->GudangModelAdmin->distinct()->findColumn('satuan');
        $tipe = $this->GudangModelAdmin->distinct()->findColumn('tipe');
        $data = [
            "title" => 'Sinergy | Detail Permintaan Barang',
            "permintaan" => $permintaan,
            "idPermintaan" => $id,
            "barang" => $barang,
            "nama_barang" => $nama_barang,
            "satuans" => $satuan,
            "tipes" => $tipe
        ];
        echo view('gudang/V_detailPermintaan',$data);
    }

    public function tambahDetailBarang()
    {
        $data = [
            'id_permintaan' => $this->request->getPost('idPermintaan'),
            'nama_barang' => $this->request->getPost('nama_barang'),
            'tipe' => $this->request->getPost('tipe'),
            'satuan' => $this->request->getPost('satuan'),
            'kuantitas' => $this->request->getPost('kuantitas'),
        ];
        $id = $data['id_permintaan'];
        $this->GudangModelDetail->addDataBarang($data);
        $url = base_url('gudang/permintaanBarang');
        return redirect()->to($url);
    }

    public function ubahDetailBarang($id)
    {
        
        $nama_barang = $this->GudangModelAdmin->findColumn('nama_barang');
        $satuan = $this->GudangModelAdmin->distinct()->findColumn('satuan');
        $tipe = $this->GudangModelAdmin->distinct()->findColumn('tipe');
        $data = [
            "title" => 'Sinergy | Ubah Detail Permintaan Barang',
            "barang" => $this->GudangModelDetail->getBarang($id),
            "nama_barang" => $nama_barang,
            "satuans" => $satuan,
            "tipes" => $tipe
        ];
        echo view('gudang/V_ubahDetailBarang',$data);
    }

    public function updateDetailBarang()
    {
        $this->GudangModelDetail->save(
            [   'id' => $this->request->getPost('id'),
                'nama_barang' => $this->request->getPost('nama_barang'),
                'tipe' => $this->request->getPost('tipe'),
                'satuan' => $this->request->getPost('satuan'),
                'kuantitas' => $this->request->getPost('kuantitas')]);

        return redirect()->to(base_url('gudang/permintaanBarang'));
    }

    public function hapusDetailBarang($id)
    {

        $this->GudangModelDetail->delete($id);
        return redirect()->to(base_url('gudang/permintaanBarang'));
    }

    // Staff Gudang

    public function kelolaInventaris()
    {
        $barang = $this->GudangModelAdmin->orderBy('update_at','DESC');
        $barang = $this->GudangModelAdmin->findAll();
        $data = [
            "title" => 'Sinergy | Kelola Inventaris',
            "barang" => $barang
        ];
        echo view('gudang/V_kelolaInventaris',$data);
    }

    public function tambahBarang()
    {
        $data = [
            'nama_barang' => $this->request->getPost('nama_barang'),
            'tipe' => $this->request->getPost('tipe'),
            'satuan' => $this->request->getPost('satuan'),
            'kuantitas' => $this->request->getPost('kuantitas'),
        ];

        $this->GudangModelAdmin->addDataBarang($data);
        return redirect()->to(base_url('gudang/kelolaInventaris'));
    }

    public function hapusBarang($id)
    {

        $this->GudangModelAdmin->delete($id);
        return redirect()->to(base_url('gudang/kelolaInventaris'));
    }

    public function ubahBarang($id)
    {
        $data = [
            "title" => 'Sinergy | Ubah Data Barang',
            "barang" => $this->GudangModelAdmin->getBarang($id)
        ];
        echo view('gudang/V_ubahDataBarang',$data);
    }

    public function updateBarang($id)
    {
        $data = [
            'id' => $this->request->getPost('id'),
            'nama_barang' => $this->request->getPost('nama_barang'),
            'tipe' => $this->request->getPost('tipe'),
            'satuan' => $this->request->getPost('satuan'),
            'kuantitas' => $this->request->getPost('kuantitas'),
        ];
        $this->GudangModelAdmin->ubahDataBarang($data);
        return redirect()->to(base_url('gudang/kelolaInventaris',));
    }
}
?>