<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class Register extends BaseController
{
    protected $usersModel;
    public function __construct()
    {
        $usersModel = new UsersModel();
    }

    public function index()
    {
        //include helper form
        helper(['form']);
        $data = [];
        echo view('auth/register', $data);
    }

    public function setUserSession($user)
    {
        $data = [
            'id_user' => $user['id_user'],
            'name' => $user['name'],
            'email' => $user['email'],
        ];
        session()->set($data);
        return true;
    }

    public function process()
    {
        $data = [];
        helper('form');
        $id_user = service('id_user');

        $usersModel = new UsersModel();

        //if ($this->request->getMethod() == 'post') {
        if ($this->request->getPost()) {
            $rules = [
                'name' => 'required|min_length[3]|max_length[30]',
                'email' => 'required|min_length[6]|max_length[50]|valid_email',
                'password_hash' => 'required|min_length[6]|max_length[255]',
            ];

            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
                session()->setFlashdata('error', $data['validation']->listErrors());
                //return redirect()->to('/signup');
                echo view('register', $data);
            } else {
                $newData = [

                    //'id_user'       => htmlspecialchars($this->request->getVar('id_user')),
                    'name'          => htmlspecialchars($this->request->getVar('name')),
                    'email'         => htmlspecialchars($this->request->getVar('email')),
                    'password_hash' => password_hash($this->request->getVar('password_hash'), PASSWORD_DEFAULT)
                    //'password_hash' => htmlspecialchars($this->request->getVar('password')),
                ];
                $r = $usersModel->insert($newData);

                if ($r) {
                    echo 'Registered';
                    session()->setFlashdata('success', 'User successfully registered, please login');
                    return redirect()->to(base_url('/login'));
                } else {
                    echo 'Not Registered';
                    return redirect()->to(base_url('/home'));
                }
                // return redirect()->to('/login');
            }
        } else {
            return view('auth/register', $data);
        }

        // session()->setFlashdata('error', $this->validator->listErrors());
        // return redirect()->back()->withInput();
        // $users->insert([
        //     'id_user' => $this->request->getVar('id_user'),
        //     'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
        //     'name' => $this->request->getVar('name'),
        //     'email' => $this->request->getVar('email')
        // ]);
        // return redirect()->to('/login');

    }

    public function signout()
    {
        session()->destroy();
        return redirect()->to(base_url());
    }
}
