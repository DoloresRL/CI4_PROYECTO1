<?php

namespace App\Controllers;

use App\Models\UserModel;

class HolaMundo extends BaseController
{
    public function __construct(){
        helper('form');
    }
    public function formulario(){
        
        return view('estructura/header') . view('estructura/formulario');
    }      
    public function guarda()
    {
            $userModel = new UserModel();
            $data = [
                'name' => $this->request->getPost('name'),
                'email' => $this->request->getPost('email')
            ];
            if ($userModel->insert($data)) {
                echo "Datos guardados correctamente";
            } else {
                var_dump($userModel->errors());
            }
            $users = $userModel->withDeleted()->findAll();
            $users = array('users' => $users);
            return view('estructura/header') . view('estructura/body', $users);
    }
        
    public function index()
    {
        $userModel = new UserModel();
        //$user = $userModel->find('1');
        //$users = $userModel->find([1,2]);
        //$users = $userModel->findAll(); //recuperar todos los registros, sin incluir los registros eliminados suavemente (soft deleted).
        //$users = $userModel->where('name','Maria')->findAll();//recuperar todos los registros donde el nombre sea igual a Maria
        //$users = $userModel->findAll(3,2);//Recuperar registros utilizando limites (3 registros a partir del indice 2)
        $users = $userModel->withDeleted()->findAll();//recuperar todos los registros, incluidos los registros eliminados suavemente (soft deleted).
        //$users = $userModel->onlyDeleted()->findAll();//recuperar únicamente los registros que han sido eliminados suavemente (soft deleted)
        $users = array('users' => $users);
        //var_dump($users); //imprimirá en la salida del programa una representación estructurada de la variable $user, incluyendo su tipo de dato y su contenido.

        return view('estructura/header') . view('estructura/body', $users);
    }

    public function insert()
    {
        $userModel = new UserModel();
        $data = [
            'name' => "Programadornuevo",
            'email' => "Programadornuevo@correo.com"
        ];

        $userModel->insert($data);
        $users = $userModel->findAll();
        $users = array('users' => $users);

        return view('estructura/header') . view('estructura/body', $users);
    }

    public function update()
    {
        $userModel = new UserModel();
        $data = [
            'name' => "Programador2",
            'email' => "Programador2@correo.com"
        ];

        $userModel->update(10, $data);
        $users = $userModel->findAll();
        $users = array('users' => $users);

        return view('estructura/header') . view('estructura/body', $users);
    }
    public function updateWhere()
    {
        $userModel = new UserModel();
        /*$data = [
            'name' => "Programador2"
        ];

        $userModel->update([1,2,3],$data); */
        $userModel->whereIn('id', [4, 5, 10])
            ->set(['name' => 'Test1'])
            ->update();
        $users = $userModel->findAll();
        $users = array('users' => $users);

        return view('estructura/header') . view('estructura/body', $users);
    }

    public function save()
    {
        $userModel = new UserModel();
        //Nuevo registro
        $data = [
            'name' => "Programador11",
            'email' => "Programador2@correo.com"
        ];
        //Modifica registro
        $data = [
            'id' => "12",
            'name' => "Programador12",
            'email' => "Programador12@correo.com"
        ];

        $userModel->save($data);
        $users = $userModel->findAll();
        $users = array('users' => $users);

        return view('estructura/header') . view('estructura/body', $users);
    }

    public function delete()
    {
        $userModel = new UserModel();


        //$userModel->delete(10); //Elimina un registro
        //$userModel->delete([11,12]); //Elimina varios registros
        $userModel->where('id', 4)->delete(); //Elimina un registro por algun valor(id)
        $users = $userModel->findAll();
        $users = array('users' => $users);

        return view('estructura/header') . view('estructura/body', $users);
    }
    public function purgeDeletedRecords()
    {
        $userModel = new UserModel();
        $userModel->purgeDeleted(); //eliminar permanentemente los registros que han sido marcados como eliminados suavemente (soft deleted)
        $users = $userModel->findAll();
        $users = array('users' => $users);

        return view('estructura/header') . view('estructura/body', $users);
    }

    public function desdeSubCarpeta()
    {
        $colores = array(
            "rojo" => "Red",
            "verde" => "Green",
            "azul" => "Blue",
            "amarillo" => "Yellow",
            "rosa" => "Pink",
            "naranja" => "Orange"
        );
        //echo "->".$colores['naranja']; // Imprime "->Orange"

        return view('vista_hola_mundo', $colores);

    }

    public function insertUserInvalid()
    {
        $userModel = new UserModel();
        $data = [
            'name' => "Programador_7",
            'email' => "Programador6@correo.com"
        ];

        if(!$userModel->save($data));
        {
            var_dump($userModel->errors());
        }
        $users = $userModel->findAll();
        $users = array('users' => $users);

        return view('estructura/header') . view('estructura/body', $users);
    }

    public function obtenerRegistro(){
        $userModel = new UserModel();
        //Obtener como objeto
        $users = $userModel->asObject()->where('name','Programador6')
        ->orderBy('id','asc')
        ->findAll();
        var_dump($users);
        //Obtener como array
        $users = $userModel->asArray()->where('name','Programador6')
        ->orderBy('id','asc')
        ->findAll();
        var_dump($users);

    }
}