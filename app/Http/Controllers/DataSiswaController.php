<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataSiswaController extends Controller
{
    public function datasiswa(){
        $nama = 'Nasywa Nur Nafilah';
        return $nama;
    }

    public function datasiswi(){
        $nama = 'Ajeng';
        return $nama;
    }

    public function nama($nama = 'Nasywa'){
        return $nama;
    }

}
