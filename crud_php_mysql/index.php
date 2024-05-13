<?php include 'conexion.php'; ?>

<?php
// CREAR Y SELECCIONAR QUERY
$query = "SELECT * FROM usuarios ORDER BY id DESC";
$usuarios = mysqli_query($con, $query);
?>

<!doctype html>
<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="estilos.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

   

 <!-- MENU -->

 <ul class="nav nav-tabs" style="background-color: #2F8F80;">
  <li class="nav-item">
  <a class="nav-link active" aria-current="page" href="index2.php" style="font-weight: bold; color: black;">Usuario</a>

  </li>
  <li class="nav-item">
    <a class="nav-link" href="index2.php" style="font-weight: bold; color: white;">Inventario</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="index2.php" style="font-weight: bold; color: white;">Pronto</a>
  </li>
</ul>





<br> 












 <!-- Bonita tipografía de Bootstrap -->












    <title>CRUD PHP Y MYSQL</title>
</head>
<body style="background-color: #EEF4F4;">
<div class="container">
    <!-- Título bonito de bienvenida -->
    <br> 
    <div style="text-align: left;">
    <h1 class="welcome-title" style="font-family: 'Fredoka One', sans-serif; ">Bienvenido Usuario</h1>
</div>




    <!-- Aquí va el resto de tu contenido -->


    <br> <br> 

    <div style="display: inline-block; margin-right: 50px;">
    <div class="card-client" onclick="window.location.href = 'index2.php';" style="text-align: center;">
        <div class="user-picture">
            <!-- Ajusta el tamaño del logo con el atributo 'width' -->
            <img src="img/listas-de-control.png" alt="Logo de inventario" width="50">
        </div>
        <p class="name-client">INVENTARIO
          
        </p>
        <div class="social-media">
           
        <span>VER</span>
        
        </div>
    </div>




    
</div>













<div style="display: inline-block; margin-right: 50px;">
    <div class="card-client" onclick="window.location.href = 'index2.php';" style="text-align: center;">
        <div class="user-picture">
            <!-- Ajusta el tamaño del logo con el atributo 'width' -->
            <img src="img/cuenta.png" alt="Logo de inventario" width="50">
        </div>
        <p class="name-client">FACTURACIÓN
        </p>
        <div class="social-media">
        <span>VER</span>
        </div>
    </div>
</div>






<div style="display: inline-block;">
    <div class="card-client" onclick="window.location.href = 'index2.php';" style="text-align: center;">
        <div class="user-picture">
            <!-- Ajusta el tamaño del logo con el atributo 'width' -->
            <img src="img/proximamente-en-breve-pronto.png" alt="Logo de inventario" width="50">
        </div>
        <p class="name-client">PRONTO...
        </p>
        <div class="social-media">
        <span>VER</span>
        </div>
    </div>
</div>









</div>
















































<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
--><br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> 
<p >Elaborado por: Deivy Duvan Dartagena Lopez
        </p>
</body>
</html>
