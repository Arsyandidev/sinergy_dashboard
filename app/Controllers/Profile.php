<?php 

namespace App\Controllers;

Class Profile extends BaseController{
    public function index()
    {
        $data = ["title" => 'Sinergy | Profile'];
        echo view('profile/profile', $data);
    }
}

?>