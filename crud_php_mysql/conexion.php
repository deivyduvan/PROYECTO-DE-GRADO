<?php





// conectar a mysql


$con = mysqli_connect("localhost" , "root", "", "crud_php_mysql");


/// probar conexion

if(mysqli_connect_errno()){
    echo "fallo al conectarse a mysql" .mysqli_connect_error();
}else {
   echo "";
}
