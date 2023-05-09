<?php

namespace App\Controllers\Status;

use App\Controllers\BaseController;

class Siswa extends BaseController
{
    public function index()
    {
        return view('status/siswa');
    }
}
