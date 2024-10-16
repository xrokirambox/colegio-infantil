<!-- conexion con el controlador para editar estudiantes-->
<!-- Conexión a la base de datos -->
<?php
include_once '..//controller/editarEst.php';
include '..//model/conexion.php';
?>

<!-- Inicio html -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..//style/estilo2.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Actualizar estudiante</title>

</head>

<body>
    <!-- Inicio de menú -->
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="inicio.php">Principal</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="registroAcu.php">Registrar Acudientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="registroEst.php">Registrar Estudiantes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="acudientes.php">Ver Acudientes </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="estudiantes.php">Ver Estudiantes</a>
                    </li>
                </ul>
                <a class="nav-link text-white" href="ingreso.php">Cerrar Sesion</a>
            </div>
        </div>
    </nav>
    <!-- Fin de menú -->

    <section class=" vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration bg-black" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">

                            <!-- Título -->
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 bg-black " style="color:#FFFFFF">Actualizar datos del estudiante</h3>

                            <!-- Inicio del formulario de actualización de datos del estudiante -->
                            <form method="POST" class="form text-left form-inline col-md-12" style="padding-bottom: 1%;">

                                <?php
                                $sql = "SELECT * FROM estudiantes WHERE Id =" . $_REQUEST['Id'];
                                $resultado = $conn->query($sql);
                                $row = $resultado->fetch_assoc();
                                ?>

                                <input type="hidden" name="EstId" value="<?php echo $row['Id']; ?>">

                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <!-- Llama el/los nombre/s ingresado/s-->
                                            <input name="EstNombre" type="text" class="form-control form-control-lg" value="<?php echo $row['EstNombre']; ?>">
                                            <label class="form-label">Nombres</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <!-- Llama el/los apellido/s ingresado/s-->
                                            <input name="EstApellido" type="text" class="form-control form-control-lg" value="<?php echo $row['EstApellido']; ?>">
                                            <label class="form-label">Apellidos</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <!-- Llama la edad ingresada-->
                                            <input name="EstEdad" type="number" min="2" max="6" class="form-control form-control-lg" value="<?php echo $row['EstEdad']; ?>">
                                            <label class="form-label">Edad</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <!-- Llama el numero de registro civil ingresado-->
                                            <input name="EstRegistroCivil" type="text" class="form-control form-control-lg" value="<?php echo $row['EstRegistroCivil']; ?>">
                                            <label class="form-label">Registro Civil</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <select name="EstGrado" class="form-control form-control-lg">
                                                <option> Seleccione el grado</option>
                                                <!-- Llama el grado seleccionado -->
                                                <option <?php echo $row['EstGrado'] === 'Parvulo' ? "selected='selected'" : "" ?> value="Parvulo"> Párvulo</option>
                                                <option <?php echo $row['EstGrado'] === 'Pre-Jardin' ? "selected='selected'" : "" ?> value="Pre-Jardin"> Pre-Jardin</option>
                                                <option <?php echo $row['EstGrado'] === 'Jardin' ? "selected='selected'" : "" ?> value="Jardin"> Jardin</option>
                                                <option <?php echo $row['EstGrado'] === 'Transición' ? "selected='selected'" : "" ?> value="Transicion"> Transición</option>
                                            </select>
                                            <label class="form-label">Grado</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <select name="EstGenero" class="form-control form-control-lg">
                                                <option> Seleccione el género</option>
                                                <!-- Llama el género seleccionado -->
                                                <option <?php echo $row['EstGenero'] === 'Femenino' ? "selected='selected'" : "" ?> value="Femenino"> Femenino</option>
                                                <option <?php echo $row['EstGenero'] === 'Masculino' ? "selected='selected'" : "" ?> value="Masculino"> Masculino</option>
                                            </select>
                                            <label class="form-label">Género</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="form-outline">
                                        <center><select name="IdAcudiente" class="form-control form-control-lg"></center>
                                        <option>Seleccione el acudiente</option>

                                        <?php
                                        $sql1 = "SELECT Id, AcuNombre, AcuApellido FROM acudientes WHERE Id=" . $row['IdAcudiente'];
                                        $resultado1 = $conn->query($sql1);

                                        $row1 = $resultado1->fetch_assoc();

                                        /* Llama el nombre y apellido del acudiente seleccionado */
                                        echo "<option selected value='" . $row1['Id'] . "'>" . $row1['AcuNombre'] . " " . $row1['AcuApellido'] . "</option>";

                                        $sql2 = "SELECT * FROM acudientes";
                                        $resultado2 = $conn->query($sql2);

                                        while ($fila = $resultado2->fetch_array()) {
                                            echo "<option value='" . $fila['Id'] . "'>" . $fila['AcuNombre'] . " " . $fila['AcuApellido'] . "</option>";
                                        }
                                        ?>
                                        </select>
                                        <label class="form-label">Acudientes</label>
                                    </div>
                                </div>
                                <br>
                                <!-- Botón para actualizar la información -->
                                <center><input name="actualizar1" type="submit" value="ACTUALIZAR" class="btn btn-info"></center>
                            </form>

                            <!-- Fin del formulario -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Inicio de pie de página -->
    <footer class="bg-dark text-center text-lg-start">
        <div class="text-center text-white p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Copyright:
            <a class="text-white">Jardín Infantil los niños son felices</a>
        </div>
    </footer>
    <!-- fin de pie de página -->


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>
<!-- Fin html -->