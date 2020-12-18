<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        h3{
            text-align: center;
            color: white;
            position: relative;
            bottom: 30px;
            margin-top: 40px;
         }
    .posicion{
            position: relative;
            left: 38%;
    
        }
        
       #bor{
          
            border: 4px solid white;
            border-radius: 30px;
            height: 380px;
            width: 300px;
            border-bottom: 300px;
            position: relative;
            bottom:5px;
            
             
       } 
        #fondo{
            background-color: #3b83bd;
            position: relative;
            top: 50px;
            padding-right: 120px;
           
        }
        body{
            
            background-color:  #f5f5dc;
        }
        input{
            position: relative;
            bottom: 20px;
        }
    </style>
    <title>Registro de usuario</title>
</head>
<body>  
        <div class="container"> 
               <div class="jumbotron" class="form-control" id="fondo"> 
              
               <div class="form-row" class="form-control" ><!-- target es para que se valide los datos en la misma pagina -->
                     <div id="bor" class="posicion"  > 
                     <h3><b>Inicio de Sesión</b></h3> 
                        <form action="validar.php" method="POST" >     
                        <center>                                            
                        <div class="col" class="form-control">
                            <input type="text" name="user" placeholder="ID" class="form-control" required><br>
                            <input type="password" name="pass" placeholder="Contraseña" class="form-control" required> <br>
                            
                            <input type="submit" name="enviar" class="btn btn-primary">
                    </div>      
                            </center>

        </div>
               </div>
               </div>    
                        </div> 
                        </form>




</body>
</html>