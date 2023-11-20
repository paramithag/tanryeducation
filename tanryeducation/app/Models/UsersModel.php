<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = "users";
    protected $primaryKey = "id_user";
    protected $returnType = "object";
    protected $allowedFields = ['name', 'email', 'password_hash', 'created_at', 'updated_at', 'is_active'];

    public function getUsers($id_user = false)
    {
        if ($id_user == false) {
            return $this->findAll();
        }
        return $this->where(['id_user' => $id_user])->first();
    }

    public function verifyEmail($email)
    {
        return $this->where(['email' => $email])->first();
    }

    protected function passwordHash(array $data)
    {
        if (isset($data['data']['password_hash']))
            $data['data']['password_hash'] = password_hash($data['data']['password_hash'], PASSWORD_DEFAULT);
        return $data;
    }
}
