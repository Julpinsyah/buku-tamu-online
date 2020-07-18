<?php

namespace App\Controllers;

class AcaraController extends BaseController
{
    public function formAcara()
    {
        $data['title'] = "Form Acara";
        return view('Acara/form_acara', $data);
    }

    public function tambahAcara()
    {
        echo 'tambah data anda';
    }
}
