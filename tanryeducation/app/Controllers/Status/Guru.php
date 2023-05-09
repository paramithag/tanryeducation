<?php

namespace App\Controllers\Status;

use App\Controllers\BaseController;

class Guru extends BaseController
{
    public function index()
    {
        return view('status/guru');
    }
}
