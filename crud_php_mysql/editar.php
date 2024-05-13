

<?php 

//CONEXION
include 'conexion.php'; 

//ESTE IF ES PARA DECIR "SI SE DIO CLICK EN EL BOTON ENTONCES..."

//OBTENER EL ID ENVIADO DE INDEX

$idRegistro = $_GET['id'];

// seleccionar datos

$query = "SELECT * FROM usuarios where id='".$idRegistro."'";
$usuario = mysqli_query($con, $query) or die (mysqli_error());

//VOLVAMOS LOS DATOS DE ESE REGISTRO EN UNA FILA

$fila  = mysqli_fetch_assoc($usuario);


if(isset($_POST['editarRegistro'])){
   
$nombre = mysqli_real_escape_string($con, $_POST['nombre']);
$apellidos = mysqli_real_escape_string($con, $_POST['apellidos']);
$telefono = mysqli_real_escape_string($con, $_POST['telefono']);
$email = mysqli_real_escape_string($con, $_POST['email']);


// configurar tiempo y zona horario

date_default_timezone_set('America/Bogota');
$time = date('h:i:s a', time());




///VALIDAR SI LOS CAMPOS NO ESTAN VACIOS

if(!isset($nombre) || $nombre == '' || !isset($apellidos) || $apellidos == '' || !isset($telefono) || $telefono == '' || !isset($email) || $email == '' ){

$error = "algunos campos estan vacios";



///ENVIAR LOS DATOS A LA BASE DE DATOS INSERTAR
  }else {
    $query = "UPDATE usuarios set nombre ='$nombre', apellidos = '$apellidos', telefono = '$telefono', email = '$email'  where id = '$idRegistro'";


if (!mysqli_query($con, $query )){
    die('Error: '.mysqli_error($con));
    $error = "error, no se pudo crear el registro";

}else {
    $mensaje = "Registro creado correctamente";
    header('Location: index2.php?mensaje='.urlencode($mensaje));
    exit();
}



  }
  

}



?>
















<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link href="css/estilos.css" rel="stylesheet">

    <title>CRUD PHP Y MYSQL</title>
  </head>
  <body>
    <h1 class="text-center">EDITAR PRODUCTO</h1>
    <p class="text-center"></p>

    <div class="container">

    <div class="row">
        <h4>Editar Registro</h4>
    </div>   

        <div class="row caja">





        <div class="row caja">


         <?php if (isset($error)) :  ?>
        
        
            <h4 class= "bg-danger text-white"><?php echo $error; ?></h4>
        
        <?php endif; ?>





            <div class="col-sm-6 offset-3">
            <form method="POST" action= "<?php  $_SERVER['PHP_SELF']; ?>">
                <div class="mb-3">
                    <label for="nombre" class="form-label">NOMBRE DE PRODUCTO:</label>
                    <input type="text" class="form-control" name="nombre" placeholder="Ingresa el nombre" value="<?php  echo $fila['nombre']; ?>">    
                                    
                </div>
                
                <div class="mb-3">
                    <label for="apellidos" class="form-label">COLOR:</label>
                    <input type="text" class="form-control" name="apellidos" placeholder="Ingresa los apellidos" value="<?php  echo $fila['apellidos']; ?>">                       
                </div>

                <div class="mb-3">
                    <label for="telefono" class="form-label">CANTIDAD:</label>
                    <input type="number" class="form-control" name="telefono" placeholder="Ingresa el teléfono" value="<?php  echo $fila['telefono']; ?>">                    
                </div>

                <div class="mb-3">
                    <label for="text" class="form-label">TALLA:</label>
                    <input type="text" class="form-control" name="email" placeholder="Ingresa el email" value="<?php  echo $fila['email']; ?>">                      
                </div>
              
                <button type="submit" class="btn btn-primary w-100" name="editarRegistro">Editar Registro</button>

                </form>
            </div>
        </div>
    </div>
  </body>
</html>