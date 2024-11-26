<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users'; // Nombre de la tabla
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'password', 'email', 'created_at', 'updated_at'];
    protected $useTimestamps = true;

    public function getUserByUsername($username)
    {
        return $this->where('username', $username)->first();
    }
}
