<?php

namespace App\Controllers\Welcome;

use App\Controllers\BaseController;

class Welcome extends BaseController
{
    public function index()
    {
        return view('welcome/index');
    }
}
