<!-- conexion con el controlador para editar acudientes-->
<!-- Conexión a la base de datos -->
<?php
include_once '..//controller/editarAcu.php';
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
    <title>Actualizar acudiente</title>
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
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 bg-black " style="color:#FFFFFF">Actualizar datos del acudiente</h3>

                            <!-- Inicio del formulario de actualización de datos del acudiente -->
                            <form method="post" class="form text-left form-inline col-md-12" style="padding-bottom: 1%;">

                                <?php
                                $sql = "SELECT * FROM acudientes WHERE Id =" . $_REQUEST['Id'];
                                $resultado = $conn->query($sql);
                                $row = $resultado->fetch_assoc();
                                ?>

                                <input type="hidden" name="Id" value="<?php echo $row['Id']; ?>">

                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <!-- Llama el/los nombre/s ingresado/s-->
                                            <input name="AcuNombre" type="text" class="form-control form-control-lg" value="<?php echo $row['AcuNombre']; ?>">
                                            <label class="form-label">Nombres</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <!-- Llama el/los apellido/s ingresado/s-->
                                            <input name="AcuApellido" type="text" class="form-control form-control-lg" value="<?php echo $row['AcuApellido']; ?>">
                                            <label class="form-label">Apellidos</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <!-- Llama el número de identificación ingresado-->
                                            <input name="AcuNumIdentificacion" type="text" class="form-control form-control-lg" value="<?php echo $row['AcuNumIdentificacion']; ?>">
                                            <label class="form-label">N. Identificacion</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <!-- Llama la dirección ingresada-->
                                            <input name="AcuDireccion" type="text" class="form-control form-control-lg" value="<?php echo $row['AcuDireccion']; ?>">
                                            <label class="form-label">Dirección</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <!-- Llama el número de teléfono ingresado-->
                                            <input name="AcuTelefono" type="text" class="form-control form-control-lg" value="<?php echo $row['AcuTelefono']; ?>">
                                            <label class="form-label">Teléfono</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <!-- Llama el parentesco ingresado-->
                                            <input name="AcuParentesco" type="text" class="form-control form-control-lg" value="<?php echo $row['AcuParentesco']; ?>">
                                            <label class="form-label">Parentesco</label>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <!-- Botón para actualizar la información -->
                                <center><input name="actualizar" type="submit" value="ACTUALIZAR" class="btn btn-info"></center>
                            </form>

                            <!-- Fin del formulario -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Inicio del pie de página -->
    <footer class="bg-dark text-center text-lg-start">
        <div class="text-center text-white p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Copyright:
            <a class="text-white">Jardín Infantil los niños son felices</a>
        </div>
    </footer>
    <!-- fin del pie de página -->


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>
<!-- Fin html -->