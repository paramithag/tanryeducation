<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Student extends BaseController
{
    public function index()
    {
        return view('admin/student');
    }
}
