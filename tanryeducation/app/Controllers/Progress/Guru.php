<?php

namespace App\Controllers\Progress;

use App\Controllers\BaseController;

class Guru extends BaseController
{
    public function index()
    {
        return view('progress/guru');
    }
}
