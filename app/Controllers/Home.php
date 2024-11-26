<?php

namespace App\Controllers;

use App\Models\UserModel;

class Home extends BaseController
{
    public function index()
    {
        // Mostrar la vista de login
        return view('login');
    }

    public function login()
    {
        // Validar usuario y contraseña
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $userModel = new UserModel();
        $user = $userModel->getUserByUsername($username);

        if ($user && password_verify($password, $user['password'])) {
            // Guardar información del usuario en sesión
            session()->set([
                'user_id' => $user['id'],
                'username' => $user['username'],
                'isLoggedIn' => true,
            ]);

            return redirect()->to('/inicio');
        }

        // En caso de error, redirigir al login con mensaje
        return redirect()->back()->with('error', 'Usuario o contraseña incorrectos');
    }

    public function inicio()
{
    if (!session()->get('isLoggedIn')) {
        return redirect()->to('/')->with('error', 'Debes iniciar sesión');
    }

    if (!userHasRole('admin')) {
        return redirect()->to('/')->with('error', 'No tienes permisos para acceder a esta página');
    }

    return view('inicio');
}


    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
