<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = ["title" => 'Sinergy | Dashboard'];
        return view('home', $data);
    }
}
