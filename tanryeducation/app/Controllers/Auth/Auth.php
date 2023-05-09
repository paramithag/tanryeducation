<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function index()
    {
        return view('auth/login');
    }
}
