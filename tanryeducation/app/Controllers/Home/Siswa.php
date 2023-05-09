<?php

namespace App\Controllers\Home;

use App\Controllers\BaseController;

class Siswa extends BaseController
{
    public function index()
    {
        return view('home/siswa');
    }
}
