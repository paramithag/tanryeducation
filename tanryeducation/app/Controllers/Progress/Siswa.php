<?php

namespace App\Controllers\Progress;

use App\Controllers\BaseController;

class Siswa extends BaseController
{
    public function index()
    {
        return view('progress/siswa');
    }
}
