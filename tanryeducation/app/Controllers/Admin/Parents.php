<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Parents extends BaseController
{
    public function index()
    {
        return view('admin/parents');
    }
}
