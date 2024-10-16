<!-- Inicio html -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..//style/estilo.css">
    <title>Jardin Infantil</title>
</head>

<body>

    <!-- Inicio de formulario para ingreso del usuario y contraseña -->
    <form action="validar.php" method="POST">
        <h1 class="fw-bold mb-2 text-uppercase">¡Jardín Infantil los niños son felices!</h1>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label> Usuario </label>
        <input type="text" name="usuario" placeholder="Ingrese su usuario">
        <br><br>

        <label> Contraseña </label>
        <input type="password" name="contraseña" placeholder="Ingrese su contraseña">
        <br><br>

        <button type="submit"> Ingresar </button>
    </form>
    <!-- Fin de formulario para ingreso del usuario y contraseña -->



</body>

</html>
<!-- Fin html -->