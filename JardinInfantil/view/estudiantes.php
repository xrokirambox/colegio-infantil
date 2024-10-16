<!-- Conexión a la base de datos -->
<?php
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
  <script src="https://kit.fontawesome.com/f7d41a7b06.js" crossorigin="anonymous"></script>
  <title>Estudiantes</title>
</head>

<body>
  <!-- Inicio del menú -->
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
  <!-- Fin del menú -->

  <section class="vh-100 gradient-custom">
    <!-- Título -->
    <h2>LISTA DE ESTUDIANTES</h2>
    <br><br>
    <div class="container">

      <!-- Inicio de tabla estudiantes -->
      <table class="table table-bordered table-striped table-dark">
        <div class="container">
          <a href="registroEst.php" class="btn btn-success">AGREGAR NUEVO ESTUDIANTE</a>
        </div>

        <br>

        <thead class="table-info">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">NOMBRES</th>
            <th scope="col">APELLIDOS</th>
            <th scope="col">EDAD</th>
            <th scope="col">REGISTRO CÍVIL</th>
            <th scope="col">GRADO</th>
            <th scope="col">GÉNERO</th>
            <th scope="col">NOMBRES DEL ACUDIENTE</th>
            <th scope="col">ACCIONES</th>
          </tr>
        </thead>

        <!-- Inicio de datos de la tabla del crud -->
        <tbody>
          <?php
          $sql = $conn->query("SELECT *, estudiantes.Id as EstId FROM  estudiantes INNER JOIN acudientes ON estudiantes.IdAcudiente= acudientes.Id");
          while ($resultado = $sql->fetch_assoc()) {
          ?>
            <tr>
              <th scope="row"><?php echo $resultado['EstId'] ?></th>
              <th scope="row"><?php echo $resultado['EstNombre'] ?></th>
              <th scope="row"><?php echo $resultado['EstApellido'] ?></th>
              <th scope="row"><?php echo $resultado['EstEdad'] ?></th>
              <th scope="row"><?php echo $resultado['EstRegistroCivil'] ?></th>
              <th scope="row"><?php echo $resultado['EstGrado'] ?></th>
              <th scope="row"><?php echo $resultado['EstGenero'] ?></th>
              <th scope="row"><?php echo $resultado['AcuNombre'] ?> <?php echo $resultado['AcuApellido'] ?>
              <th>
                <!-- editar y borrar datos de los estudiantes-->
                <a href="editarEstudiante.php?Id=<?php echo $resultado['EstId'] ?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                <a href="../controller/eliminarEstudiante.php?Id=<?php echo $resultado['EstId'] ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
              </th>
            </tr>
          <?php
          }
          ?>

        </tbody>
      </table>
      <!-- Fin de la tabla estudiantes -->
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