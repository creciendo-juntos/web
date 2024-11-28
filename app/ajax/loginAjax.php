<?php

use app\controllers\loginController;

require_once "../../config/app.php";
require_once "../views/inc/session_start.php";
require_once "../../autoload.php";

if (isset($_POST['login_usuario']) && isset($_POST['login_clave'])) {
    $insLogin = new loginController();

    $insLogin->iniciarSesionControlador();
} else {
    echo "<script>
    Swal.fire({
      icon: 'error',
      title: 'Ocurrió un error inesperado',
      text: 'Usuario o clave incorrectos'
    });
</script>";
}
