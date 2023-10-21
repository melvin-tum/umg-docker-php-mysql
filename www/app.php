<?php
  require_once ('includes/modals.php');
  require_once ('includes/conexion.php');
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Melvin Tum</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="css/material-design-iconic-font.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
  </head>

  <body>

  
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php"><h2>Universidad <em>Mariano Galvez</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Inicio
                      <span class="sr-only">(current)</span>
                    </a>
                </li>

                <li class="nav-item"><a class="nav-link" href="app.php">App</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">Contacto</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading contact-heading header-text" style="background-image: url(assets/images/heading-4-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>Gestión de Usuarios</h4>
              <h2>Concatanos</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
      

    <div class="find-us">
      <div class="container">
        <div class="section-heading">
          <div class="contact-form">
            <fieldset>
              <button class="filled-button" onclick="openModal()">Nuevo</button>
            </fieldset>
          </div>
        </div>

        <?php
          $conn = mysqli_connect('db', 'root', 'test', 'dbname');

          if (!$conn) {
              die("Error de conexión: " . mysqli_connect_error());
          }
      
          if (isset($_POST['create'])) {
            $name = $_POST['name'];
              $usuario = $_POST['usuario'];
              $correo = $_POST['correo'];
              $estado = $_POST['estado'];
      
              $sql = "INSERT INTO Person (name,usuario, correo, estado) VALUES ('$name','$usuario','$correo','$estado')";
              if (mysqli_query($conn, $sql)) {
                  echo "Registro creado con éxito.";
              } else {
                  echo "Error al crear el registro: " . mysqli_error($conn);
              }
          }
      
          if (isset($_POST['update'])) {
              $id = $_POST['id'];
              $newName = $_POST['new_name'];
      
              $sql = "UPDATE Person SET name='$newName' WHERE id=$id";
              if (mysqli_query($conn, $sql)) {
                  echo "Registro actualizado con éxito.";
              } else {
                  echo "Error al actualizar el registro: " . mysqli_error($conn);
              }
          }
      
          if (isset($_GET['delete'])) {
              $id = $_GET['delete'];
      
              $sql = "DELETE FROM Person WHERE id=$id";
              if (mysqli_query($conn, $sql)) {
                  echo "Registro eliminado con éxito.";
              } else {
                  echo "Error al eliminar el registro: " . mysqli_error($conn);
              }
          }

          $query = 'SELECT * From Person';
          $result = mysqli_query($conn, $query);

          echo '<table class="table table-striped">';
          echo '<thead><tr><th></th><th>Nombre</th><th>Usuario</th><th>Correo Electronico</th><th>Estado</th></tr></thead>';
          while($value = $result->fetch_array(MYSQLI_ASSOC)){
              echo '<tr>';
              echo '<td><a href="#"><span class="glyphicon glyphicon-search"></span></a></td>';
              foreach($value as $element){
                  echo '<td>' . $element . '</td>';
              }

              echo '</tr>';
          }
          echo '</table>';

          echo '<h2 id="create">Crear Nuevo Registro</h2>';
          echo '<form method="post">';
          echo 'Nombre: <input type="text" name="name" required>';
          echo 'Usuario: <input type="text" name="usuario" required>';
          echo 'Correo: <input type="text" name="correo" required>';
          echo 'Estado: <input type="text" name="estado" required>';
          echo '<input type="submit" name="create" value="Crear">';
          echo '</form>';

          
          $result->close();
          mysqli_close($conn);
      ?>
        
      </div>
    </div>

    <?php
    require_once 'includes/footer.php';
?>