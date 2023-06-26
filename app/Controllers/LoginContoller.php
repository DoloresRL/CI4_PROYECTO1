<?php

namespace App\Controllers;

use App\Controllers\Users;

class LoginContoller extends BaseController
{
    public function index()
    {
        $mensaje = session('mensaje');
        return view('estructura/header') . view('login', ["mensaje", $mensaje]);
    }

    public function inicio()
    {
        return view('estructura/inicio');
    }


    public function login()
    {
        $userController = new Users();
        $request = \Config\Services::request();
        $user = $this->request->getPost('inputUser');
        $password = $this->request->getPost('inputPassword');

        $datosUsuario = $userController->obtenerUsuario(['nameUser' => $user]);

        if (count($datosUsuario) > 0 && password_verify($password, $datosUsuario[0]['passwordUser'])) {
            $data = [
                "usuario" => $datosUsuario[0]['nameUser'],
                "type" => $datosUsuario[0]['typeUser']
            ];

            $session = session();
            $session->set($data);
            return redirect()->to(base_url('index.php/inicio'))->with('mensaje', 1);

        } else {
            return redirect()->to(base_url('/'))->with('mensaje', 0);
        }
    }
    public function salir()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('/'));
    }
}