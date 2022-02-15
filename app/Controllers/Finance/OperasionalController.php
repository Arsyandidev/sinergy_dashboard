<?php

namespace App\Controllers\Finance;

use App\Controllers\BaseController;
use App\Models\OperasionalModel;

class OperasionalController extends BaseController
{
    public function __construct()
    {
        $this->OperasionalModel = new OperasionalModel();
    }
    public function index()
    {
        $operasional = $this->OperasionalModel->findAll();
        $data = [
            'title' => 'Sinergy Dashboard | Operasional',
            'operasional' => $operasional,
        ];
        return view('finance/operasional/index', $data);
    }
    public function verifikasi($id)
    {
        $data = $this->OperasionalModel->where('id', $id)->find();
        $data = [
            'status_fm' => 1
        ];
        $this->OperasionalModel->verifikasi($data);
        return redirect()->back();
    }
}
