<?php

namespace App\Controllers\Finance;

use App\Controllers\BaseController;

class FinanceController extends BaseController
{
    public function __construct()
    {
        if (session()->get('role') != 'finance')
        {
            echo 'access denide';
            exit;
        }
    }
    public function index()
    {
        $data = [
            'title' => 'Sinergy Dashboard | Finance'
        ];
        return view('finance/index', $data);
    }
}
