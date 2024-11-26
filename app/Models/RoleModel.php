<?php

namespace App\Models;

use CodeIgniter\Model;

class RoleModel extends Model
{
    protected $table = 'roles'; // Nombre de la tabla
    protected $primaryKey = 'id';
    protected $allowedFields = ['role_name'];
}
