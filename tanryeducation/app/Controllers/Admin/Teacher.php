<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Teacher extends BaseController
{
    public function index()
    {
        return view('admin/teacher');
    }
}
