<!DOCTYPE html>
<html lang="en">
<head>
<title>Administrador de Usuario</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>


</style>

</head>
<body>

 <header>
 <center>

<h2>

    Usuario: <?php session_start(); echo $_SESSION['usuario'];?>

</h2>
<a href="logout.php">Salir</a>

</center>
  

    <?php
    if(isset($_GET['accion'])){
        
       if($_GET['accion']=="actualizar"){
           $accion="mostrar";
       } 
       else{     
        $accion=$_GET['accion'];
       } 
       
    }
    
    else{
        $accion="inicio";
    }

        require_once 'header.php';

    ?>


 </header>

 <div class="container">

   


    <?php

        require_once 'routing.php';

    ?>



 </div>
    
</body>
</html>