<?php

use App\Models\RoleModel;
use App\Models\UserModel;

function userHasRole($roleName)
{
    $session = session();
    $userId = $session->get('user_id');

    if (!$userId) {
        return false;
    }

    $roleModel = new RoleModel();
    $roles = $roleModel->db->table('user_roles')
        ->select('roles.role_name')
        ->join('roles', 'roles.id = user_roles.role_id')
        ->where('user_roles.user_id', $userId)
        ->get()
        ->getResultArray();

    foreach ($roles as $role) {
        if ($role['role_name'] === $roleName) {
            return true;
        }
    }

    return false;
}
