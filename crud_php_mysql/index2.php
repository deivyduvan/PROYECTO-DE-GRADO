

<?php  include 'conexion.php'; ?>






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

    <title>CRUD PHP Y MYSQL</title>
  </head>
  <body style="background-color: #EEF4F4;">






<!-- MENU -->

<ul class="nav nav-tabs" style="background-color: #2F8F80;">
  <li class="nav-item">
  <a class="nav-link active" aria-current="page" href="index.php" style="font-weight: bold; color: black;">Inicio</a>

  </li>


  <li class="nav-item">
    <a class="nav-link" href="index.php" style="font-weight: bold; color: white;">Usuario</a>
  </li>


  <li class="nav-item">
    <a class="nav-link" href="index.php" style="font-weight: bold; color: white;">Inventario</a>
  </li>


  <li class="nav-item">
  <a class="nav-link" href="index.php" style="font-weight: bold; color: white;">Pronto</a>

  </li>
</ul>










  <br>  <br> 






  <div class="container">
    <div class="row align-items-start">
        <div class="col">
            <h1 class="text-left" style="font-family: 'Fredoka One', sans-serif; color: #2F8F80; font-weight: bold;">INVENTARIO</h1>
            <p class="text-left" style="font-family: 'Fredoka One', sans-serif;">PROTOTIPO DE SISTEMA DE INVENTARIO</p>
        </div>
        <div class="col">







        
 <!-- RELOJ -->






            <div class="card float-end">


            <div class="card float-end" id="clock">
    <p class="time-text"><span id="hour">00</span>:<span id="minute">00</span><span class="time-sub-text">PM</span></p>
</div>

<script>
    function getColombiaTime() {
        var date = new Date();
        var utc = date.getTime() + (date.getTimezoneOffset() * 60000);
        var newDate = new Date(utc + (3600000 * -5)); // Colombia UTC-5

        var hour = newDate.getHours();
        var minute = newDate.getMinutes();
        var period = hour >= 12 ? "PM" : "AM";

        hour = hour % 12;
        hour = hour ? hour : 12; // Si es 0, lo reemplaza por 12
        minute = (minute < 10 ? "0" : "") + minute;

        return {
            hour: hour,
            minute: minute,
            period: period
        };
    }

    function updateClock() {
        var time = getColombiaTime();
        document.getElementById('hour').innerText = time.hour;
        document.getElementById('minute').innerText = time.minute;
        document.querySelector('.time-sub-text').innerText = time.period;

        setTimeout(updateClock, 1000);
    }

    updateClock();
</script>










            
            </div>
        </div>
    </div>





<br>  <br> 

    


    <?php if (isset($_GET['mensaje'])) :  ?>
        
        <div class = "alert alert-success alert-dismissible fade show" role="alert">
        <strong> <?php echo $_GET['mensaje']; ?></strong>

        <button type="button" class= "btn-close" data-bs-dismiss="alert" arial-label="Close"> </button>
        

    </div>
        
    <?php endif; ?>






    <div class="row justify-content-end">
    <div class="col-sm-2">
    <div class="group">


    

    <svg viewBox="0 0 24 24" aria-hidden="true" class="icon" >
        <g>
            <path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"></path>
        </g>
    </svg>
    <input class="input" type="search" placeholder="Buscar" id="buscarInput" class="input" type="search" placeholder="Buscar">


    

</div>



    </div>

    <div class="col-sm-2">
        <a href="crear.php" class="btn btn-success">Crear Nuevo</a>
    </div>
</div>



       






















        




        

        <div class="row caja">
            <div class="col-sm-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>NOMBRE DE PRODUCTO</th>
                            <th>COLOR</th>
                            <th>CANTIDAD</th>
                            <th>TALLA</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>

                
                 <?php while($fila = mysqli_fetch_assoc($usuarios)) : ?>


                    <tr>
                            <td><?php echo $fila['id']; ?></td>
                            <td><?php echo $fila['nombre']; ?></td>
                            <td><?php echo $fila['apellidos']; ?></td>
                            <td><?php echo $fila['telefono']; ?></td>
                            <td><?php echo $fila['email']; ?></td>
                            <td>


                            <div class="botones-container">


    <!-- BOTON EDITAR -->



    <a href="editar.php?id=<?php echo $fila['id']; ?>" class="btn btn-success">Editar</a>



    <!-- BOTON ELIMINAR -->


    
    <a href="borrar.php?id=<?php echo $fila['id']; ?>" class="bin-button">
        <svg class="bin-top" viewBox="0 0 39 7" fill="none" xmlns="http://www.w3.org/2000/svg">
            <line y1="5" x2="39" y2="5" stroke="white" stroke-width="4"></line>
            <line x1="12" y1="1.5" x2="26.0357" y2="1.5" stroke="white" stroke-width="3"></line>
        </svg>
        <svg class="bin-bottom" viewBox="0 0 33 39" fill="none" xmlns="http://www.w3.org/2000/svg">
            <mask id="path-1-inside-1_8_19" fill="white">
                <path d="M0 0H33V35C33 37.2091 31.2091 39 29 39H4C1.79086 39 0 37.2091 0 35V0Z"></path>
            </mask>
            <path d="M0 0H33H0ZM37 35C37 39.4183 33.4183 43 29 43H4C-0.418278 43 -4 39.4183 -4 35H4H29H37ZM4 43C-0.418278 43 -4 39.4183 -4 35V0H4V35V43ZM37 0V35C37 39.4183 33.4183 43 29 43V35V0H37Z" fill="white" mask="url(#path-1-inside-1_8_19)"></path>
            <path d="M12 6L12 29" stroke="white" stroke-width="4"></path>
            <path d="M21 6V29" stroke="white" stroke-width="4"></path>
        </svg>
    </a>
</div>






                            </td>




                        




                        </tr> 

                    

                 <?php endwhile; ?>


                    </tbody>
                </table>
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
    -->





    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const buscarInput = document.getElementById("buscarInput");
        const rows = document.querySelectorAll("tbody tr");

        buscarInput.addEventListener("input", function() {
            const searchText = buscarInput.value.toLowerCase();

            rows.forEach(row => {
                const nombre = row.querySelector("td:nth-child(2)").textContent.toLowerCase();
                const apellidos = row.querySelector("td:nth-child(3)").textContent.toLowerCase();
                const telefono = row.querySelector("td:nth-child(4)").textContent.toLowerCase();
                const email = row.querySelector("td:nth-child(5)").textContent.toLowerCase();

                if (nombre.includes(searchText) || apellidos.includes(searchText) || telefono.includes(searchText) || email.includes(searchText)) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
            });
        });
    });
</script>


  </body>
</html>