<?php

namespace App\Controllers\TryOut;

use App\Controllers\BaseController;

class TryOutGuru extends BaseController
{
    public function index()
    {
        return view('tryout/add_to');
    }
}
