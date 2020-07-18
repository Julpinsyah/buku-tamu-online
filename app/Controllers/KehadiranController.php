<?php

namespace App\Controllers;

class KehadiranController extends BaseController
{
    public function formKehadiran()
    {
        $data['title'] = "Form Kehadiran";
        return view('kehadiran/form_kehadiran', $data);
    }

    public function tambahData()
    {
        echo 'tambah data anda';
    }
}
