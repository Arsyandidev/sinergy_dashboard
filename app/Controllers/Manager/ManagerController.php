<?php

namespace App\Controllers\Manager;

use App\Controllers\BaseController;

class ManagerController extends BaseController
{
    public function __construct()
    {
        if (session()->get('role') != 'manager') 
        {
            echo 'access denied';
            exit;
        }
    }
    public function index()
    {
        $data = [ 'title' => 'Sinergy Dashboard | Manager'];
        return view('manager/index', $data);
    }
}
