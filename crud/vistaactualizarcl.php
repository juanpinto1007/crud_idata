<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Registro cliente</title>
    <style>

.abs-center{
    display: flex;
    justify-content: center;
    align-items: center;
    
}

 #formulario{
    width: 60vw;
    background:#3498DB; 
    padding: 5%;
    height: auto;
}   
 #formulario input,select{
    margin-bottom: 10px;
}

#formulario .guardar {
    display: flex;
    justify-content: center;
}
#formulario .btn-primary {
    margin:1%;
}

#tituloperso{

  text-align: center;
  color: #fff;
  position:relative;
  bottom: 20px;
}
 
    </style>
</head>
<body>

    <div class="container">
       <div class="abs-center" id="centrar">
        <form action="?accion=actualizarcliente" method="post" id="formulario">

       <h3 id="tituloperso">ACTUALIZAR CLIENTE</h3>
       <?php
                    if(empty($mensaje)==false){
                
                    echo "<div class='alert alert-warning alert-dismissible fade show'>
                        <button type='button' class='close' data-dismiss='alert'>&times;</button>
                        <strong>Mensaje</strong> ".$mensaje."</div>";
                    }
        ?>
            <div class="row">
                <div class="col-lg-6">
                    <input type="text"class="form-control" placeholder="Primer Nombre" name="primernombre" value="<?php if(isset($prinom)){echo $prinom;} ?>">
                    <input type="text"class="form-control" placeholder="Segundo Nombre" name="segundonombre" value="<?php if(isset($segnom)){echo $segnom;} ?>">
                    <input type="text"class="form-control" placeholder="Primer Apellido" name="primerapellido" value="<?php if(isset($priapellido)){echo $priapellido;} ?>">
                    <input type="text"class="form-control" placeholder="Segundo Apellido" name="segundoapellido" value="<?php if(isset($segapellido)){echo $segapellido;} ?>">
                    <input type="number"class="form-control" placeholder="Identificación" name="identidad" readonly value="<?php if(isset($identidad_id)){echo $identidad_id;} ?>">

                </div>

                    <div class="col-lg-6">
                    <input type="text"class="form-control" placeholder="Ciudad" name="ciudad" value="<?php if(isset($ciudad)){echo $ciudad;} ?>">
                    <input type="number"class="form-control" placeholder="Telefono" name="tel" value="<?php if(isset($tel)){echo $tel;} ?>">
                    <input type="email"class="form-control" placeholder="E-Mail" name="email" value="<?php if(isset($email)){echo $email;} ?>">
                    <input type="text"class="form-control" placeholder="Dirección" name="direccion" value="<?php if(isset($direccion)){echo $direccion;} ?>">

                    </div>
            </div>
            <br>
                        <div class="row">
                            <div class="col-lg-12 guardar">
                            <input type="submit" name="boton" class="btn btn-primary" value="Actualizar">  
                            <a href="?accion=vistaprincipal" class="btn btn-primary">Atras</a>    
                            </div>
                        </div>
        </form>       
        </div>  
        </div> 
 
 

</body>
</html>
