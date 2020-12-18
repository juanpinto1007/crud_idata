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
        <form action="?accion=guardarcliente" method="post" id="formulario">

       <h3 id="tituloperso"> Registro de Clientes</h3>
       <?php
                    if(empty($mensaje)==false){
                
                    echo "<div class='alert alert-warning alert-dismissible fade show'>
                        <button type='button' class='close' data-dismiss='alert'>&times;</button>
                        <strong>Mensaje</strong> ".$mensaje."</div>";
                    }
        ?>
            <div class="row">
                <div class="col-lg-6">
                    <input type="text"class="form-control" placeholder="Primer Nombre" name="primernombre">
                    <input type="text"class="form-control" placeholder="Segundo Nombre" name="segundonombre">
                    <input type="text"class="form-control" placeholder="Primer Apellido" name="primerapellido">
                    <input type="text"class="form-control" placeholder="Segundo Apellido" name="segundoapellido">
                    <input type="number"class="form-control" placeholder="Identificación" name="identidad" >

                </div>

                    <div class="col-lg-6">
                    <input type="text"class="form-control" placeholder="Ciudad" name="ciudad">
                    <input type="number"class="form-control" placeholder="Telefono" name="tel">
                    <input type="email"class="form-control" placeholder="E-Mail" name="email">
                    <input type="text"class="form-control" placeholder="Dirección" name="direccion">
                    </div>
            </div>
            <br>
                        <div class="row">
                            <div class="col-lg-12 guardar">
                            <input type="submit" name="boton" class="btn btn-primary" value="Registrar">  
                            <a href="?accion=vistaprincipal" class="btn btn-primary">Consultar</a>    
                            </div>
                        </div>
        </form>       
        </div>  
        </div> 
 
 

</body>
</html>
