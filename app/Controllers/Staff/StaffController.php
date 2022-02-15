<?php

namespace App\Controllers\Staff;

use App\Controllers\BaseController;

class StaffController extends BaseController
{
    public function __construct()
    {
        if (session()->get('role') != 'staff')
        {
            echo 'access denied';
            exit;
        }
    }

    public function index()
    {
        $data = [
            'title' => 'Sinergy Dashboard | Staff'
        ];
        return view('staff/dashboard', $data);
    }
}
