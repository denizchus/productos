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
    
    <title>Guardando Informacion</title>
</head>

<body>

    <div class="container">
        <div class="row mt-5">
            <?php
               include 'conexion.php';
               $descripcion = $_POST['descripcion'];
               $cantidad=$_POST['cantidad'];
               $precio=$_POST['precio'];
               $fechaelabo=$_POST['fechaelabo'];
               $fechavenc=$_POST['fechavenc'];
               
               $InsertSQL="insert into gastos (descripcion,cantidad,precio,fechaelabo,fechavenc) values('$descripcion','$cantidad',' $precio','$fechaelabo','$fechavenc')";
               if($conexion->query($InsertSQL) === true){
                 echo '
                 <div class="alert alert-success w-100" role="alert">
                 <h4 class="alert-heading"> Información almacenada</h4>
                 <p>
                     Los datos han sido almacenados, puede consultar la información de '.$descripcion.' '.$cantidad.' en la lista.
                     <center> <h1> <i class="fas fa-sd-card"></i></h1></center>
                 </p>
                 <hr>
                 <p class="mb-0">La pagina sera redireccionada en 5 segundos.</p>
                 </div>
                 <meta http-equiv="refresh" content="5; url=index.php">
                 ';
             }else{
                 echo'
                 <div class="alert alert-warning w-100" role="alert">
                 <h4 class="alert-heading"> Información no almacenada</h4>
                 <p>
                     Ha ocurrido un error con los datos enviados y estos no fueron almacenados.
                 </p>
                 <hr>
                 <p class="mb-0">
                     Error: '.$InsertSQL.' <br>'.$conexion->error.'
                     .</p>
                 </div>
                 ';

             }

              $conexion->close(); ?>
          ?>
          




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

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>