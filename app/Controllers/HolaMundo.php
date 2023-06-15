<?php

namespace App\Controllers;

use App\Models\UserModel;

class HolaMundo extends BaseController
{



    public function index()
    {
        echo "Hola Mundo";
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


}