<!-- conexion con el controlador para registrar el acudientes-->
<?php
include "..//controller/validarAcudiente.php";
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
  <title>Registrar acudientes</title>
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
              <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 bg-black " style="color:#FFFFFF">Datos del acudiente</h3>

              <!-- Inicio formulario para ingreso de datos-->
              <form method="post" class="form text-left form-inline col-md-12" style="padding-bottom: 1%;">

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input name="AcuNombre" type="text" placeholder="Ingrese el nombre" class="form-control form-control-lg" id="Nombres">
                      <label for="Nombres" class="form-label">Nombres</label>
                    </div>
                  </div>

                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input name="AcuApellido" type="text" placeholder="Ingrese el apellido" class="form-control form-control-lg" id="Apellidos">
                      <label for="Apellidos" class="form-label">Apellidos</label>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input name="AcuNumIdentificacion" type="text" placeholder="Ingrese la identificacion" class="form-control form-control-lg" id="Identificacion">
                      <label for="Identificacion" class="form-label">N. Identificacion</label>
                    </div>
                  </div>

                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input name="AcuDireccion" type="text" placeholder="Ingrese una dirección" class="form-control form-control-lg" id="Direccion">
                      <label for="Direccion" class="form-label">Dirección</label>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input name="AcuTelefono" type="text" placeholder="Ingrese un teléfono" class="form-control form-control-lg" id="Telefeno">
                      <label for="Telefono" class="form-label">Teléfono</label>
                    </div>
                  </div>

                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input name="AcuParentesco" type="text" placeholder="Ingrese el parentesco" class="form-control form-control-lg" id="Parentesco">
                      <label for="Parentesco" class="form-label">Parentesco</label>
                    </div>
                  </div>
                </div>
                <br>
                <!-- Botón para ingresar la información -->
                <center><input name="insertar" type="submit" value="Insertar" class="btn btn-info"></center>
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
  <!-- Fin del pie de página -->


  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>
<!-- Fin html -->