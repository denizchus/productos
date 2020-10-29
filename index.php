<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">

    <title>Lista de Productos</title>
</head>

<body>

    
    <div class="container">
        <?php 
        include 'conexion.php';
        $filas =$conexion->query("select * from gastos");
        $conexion->close();
        ?>
        <div class="row mt-5">
            <div class="card w-100">
                <div class="card-header">
                    <h4 class="card-title">
                        Listado de Productos
                        <a href="nuevo.php" class="btn btn-primary float-right"> Nuevo <i class="fas fa-clipboard"></i></a>
                    </h4>
                </div>

                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>Acciones <i class="fas fa-check-circle"></i> <i class="fas fa-times-circle"></i> </th>
                            <th>Descripción  <i class="fas fa-comment-dots"></i> </th>
                            <th> Cantidad <i class="fas fa-hand-holding-usd"></i> </th>
                            <th>Precio <i class="fas fa-dollar-sign"></i></th>
                            <th> Fecha Elaborada <i class="fas fa-hourglass-start"></i> </th>
                            <th> Fecha Vencimiento <i class="fas fa-hourglass-end"></i></th>
                          
                        </tr>
                    </thead>
                    <tbody>
                       
                        <?php
                           foreach($filas as $fila){
                               echo'
                               <tr>
                               <th scope="row">
                               <a href="editar.php?id='.$fila['id'].' " class="btn btn-success">Modificar <i class="fas fa-user-edit"></i> </a>
                               
                               <a href="eliminar.php?id='.$fila['id'].'&descripcion='.$fila['descripcion'].' '.$fila['cantidad'].' " class="btn btn-danger">Eliminar <i class="fas fa-trash-alt"></i> </a>
                               </th>
                               <td>'.$fila['descripcion'].'</td>
                               <td>'.$fila['cantidad'].'</td>
                               <td>'.$fila['precio'].' <i class="fas fa-dollar-sign"></i></td>
                               <td>'.$fila['fechaelabo'].' <i class="fas fa-calendar-minus"></i></td>
                               <td>'.$fila['fechavenc'].' <i class="fas fa-calendar-times"></i> </td>
                            
                           </tr>

                               ';
                           }
                         ?>
                    </tbody>
                </table>

            </div>
        </div>
        
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>

    <!--Option 2: jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src=""></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
   
</body>

</html>