<?php
session_start();
include "..//model/conexion.php"; /* Conexión a la base de datos */

if (isset($_POST['usuario'])  && isset($_POST['contraseña'])) {

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $usuario = validate($_POST['usuario']);
    $contraseña = validate($_POST['contraseña']);

    /* Si no se ingresa el usuario entonces se solicitará */
    if (empty($usuario)) {
        header("Location: ingreso.php?error=El Usuario es requerido");
        exit();
        /* Si no se ingresa la contraseña entonces se solicitará */
    } else if (empty($contraseña)) {
        header("Location: ingreso.php?error=La Contraseña es requerida");
        exit();
    } else {
        $sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND contraseña='$contraseña'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['usuario'] === $usuario && $row['contraseña'] === $contraseña) {
                $_SESSION['usuario'] = $row['usuario'];
                $_SESSION['rol'] = $row['rol'];
                $_SESSION['Id'] = $row['Id'];
                header("Location: inicio.php");
                exit();
            } else {
                /* Si el usuario y contraseña son incorrectos se muestra error*/
                header("Location: ingreso.php?error=Usuario o contraseña incorrecta");
                exit();
            }
            /* Si el usuario y contraseña son incorrectos se muestra error*/
        } else {
            header("Location: ingreso.php?error=Usuario o contraseña incorrecta");
            exit();
        }
    }
    /* Si el usuario y contraseña son correctos el ingreso será exitoso */
} else {
    header("Location: ingreso.php");
    exit();
}
