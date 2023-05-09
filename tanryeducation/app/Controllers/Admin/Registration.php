<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Registration extends BaseController
{
    public function index()
    {
        return view('admin/registration');
    }
}
