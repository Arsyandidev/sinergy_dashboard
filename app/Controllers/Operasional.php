<?php

namespace App\Controllers;


class Operasional extends BaseController
{
    public function index()
    {
        $data = ["title" => 'Sinergy | Pengauan Operasional'];
        return view('operasional/pengeluaran_operasional', $data);
    }
}
?>