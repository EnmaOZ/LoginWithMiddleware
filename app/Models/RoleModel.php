<?php

namespace App\Models;

use CodeIgniter\Model;

class RoleModel extends Model
{
    protected $table = 'user_roles';
    protected $primaryKey = 'user_id';
    protected $returnType = 'array';
    protected $allowedFields = ['user_id', 'role_id'];

    public function getRoleByUserId($userId)
    {
        // Obtener el rol de un usuario a partir de su ID
        $builder = $this->db->table('user_roles')
            ->select('roles.role_name')
            ->join('roles', 'roles.id = user_roles.role_id')
            ->where('user_roles.user_id', $userId)
            ->limit(1);

        $result = $builder->get()->getRowArray();

        if ($result) {
            return $result['role_name'];
        }

        return null;
    }
}