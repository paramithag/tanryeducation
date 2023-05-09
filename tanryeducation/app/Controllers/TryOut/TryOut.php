<?php

namespace App\Controllers\TryOut;

use App\Controllers\BaseController;

class TryOut extends BaseController
{
    public function index()
    {
        return view('tryout/index');
    }
}
