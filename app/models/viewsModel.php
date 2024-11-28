<?php

namespace app\models;

class viewsModel
{

    /*---------- Modelo obtener vista ----------*/
    protected function obtenerVistasModelo($vista)
    {
        $listaBlanca = ["dashboard", "userNew", "userList", "userUpdate", "userSearch", "userPhoto", "logOut", "home2", "enseñanza"];
        if (in_array($vista, $listaBlanca)) {
            if (is_file("./app/views/content/" . $vista . "-view.php")) {
                $contenido = "./app/views/content/" . $vista . "-view.php";
            } else {
                $contenido = "404";
            }
        } elseif ($vista == "home") {
            $contenido = "home";
        } else {
            $contenido = "404";
        }
        return $contenido;
    }
}
