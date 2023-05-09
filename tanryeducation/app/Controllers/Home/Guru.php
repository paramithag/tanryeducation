<?php

namespace App\Controllers\Home;

use App\Controllers\BaseController;

class Guru extends BaseController
{
    public function index()
    {
        return view('home/guru');
    }
}
