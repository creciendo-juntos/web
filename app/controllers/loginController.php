<?php

namespace app\controllers;

use app\models\mainModel;

class loginController extends mainModel
{

    /*----------  Controlador iniciar sesión  ----------*/
    public function iniciarSesionControlador()
    {
        $usuario = $this->limpiarCadena($_POST['login_usuario']);
        $clave = $this->limpiarCadena($_POST['login_clave']);


        # Verificando campos obligatorios #
        if ($usuario == "" || $clave == "") {

            http_response_code(400);
            echo json_encode(["message" => "No has llenado todos los campos que son obligatorios"]);
        } else {

            # Verificando integridad de los datos #
            if ($this->verificarDatos("[a-zA-Z0-9]{4,20}", $usuario)) {

                http_response_code(400);
                echo json_encode(["message" => "El USUARIO no coincide con el formato solicitado"]);
            } else {


                # Verificando integridad de los datos #
                if ($this->verificarDatos("[a-zA-Z0-9$@.-]{7,100}", $clave)) {

                    http_response_code(400);
                    echo json_encode(["message" => "La CLAVE no coincide con el formato solicitado"]);
                } else {


                    # Verificando usuario #
                    $check_usuario = $this->ejecutarConsulta("SELECT * FROM usuario WHERE usuario_usuario='$usuario'");
                    if ($check_usuario->rowCount() == 1) {
                        $check_usuario = $check_usuario->fetch();
                        if ($check_usuario['usuario_usuario'] == $usuario && password_verify($clave, $check_usuario['usuario_clave'])) {
                            $_SESSION['id'] = $check_usuario['usuario_id'];
                            $_SESSION['nombre'] = $check_usuario['usuario_nombre'];
                            $_SESSION['apellido'] = $check_usuario['usuario_apellido'];
                            $_SESSION['usuario'] = $check_usuario['usuario_usuario'];
                            $_SESSION['foto'] = $check_usuario['usuario_foto'];
                            $_SESSION['rol'] = $check_usuario['usuario_tipoUsuario'];

                            // Redirigir según el rol del usuario
                            switch ($check_usuario['usuario_tipoUsuario']) {
                                case 'Administrador':
                                    echo json_encode(["redirect" => APP_URL . "dashboard/"]);
                                    break;
                                case 'Profesor':
                                    echo json_encode(["redirect" => APP_URL . "enseñanza/"]);
                                    break;
                                case 'Apoderado':
                                    echo json_encode(["redirect" => APP_URL . "home2/"]);
                                    break;
                                default:
                                    // En caso de que el rol no sea reconocido
                                    http_response_code(403);
                                    echo json_encode(["message" => "Acceso no autorizado"]);
                                    break;
                            }
                        } else {
                            http_response_code(400);
                            echo json_encode(["message" => "Usuario o clave incorrectos"]);
                        }
                    } else {
                        http_response_code(400);
                        echo json_encode(["message" => "Usuario o clave incorrectos"]);
                    }
                }
            }
        }
    }


    /*----------  Controlador cerrar sesión  ----------*/
    public function cerrarSesionControlador()
    {
        session_destroy();
        if (headers_sent()) {
            echo "<script> window.location.href='" . APP_URL . "'; </script>";
        } else {
            header("Location: " . APP_URL . "");
        }
    }
}
