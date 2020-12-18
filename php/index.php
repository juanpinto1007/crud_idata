
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Entrada del Sistema</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
<br>
<br>
<div class="container">
<div class="card">
<div class="card bg-primary text-white">
<center><h3>Entrada del Sistema</h3></center>
</div>
<div class="card-body">
                <?php
                    if(empty($mensaje)==false){
                
                    echo "<div class='alert alert-warning alert-dismissible fade show'>
                        <button type='button' class='close' data-dismiss='alert'>&times;</button>
                        <strong>Mensaje</strong> ".$mensaje."</div>";
                    }
                ?>
            <form action="validar.php" method="post">
                <label>Usuario</label>
                <input type="text" name="usuario" class="form-control">
                <label>Password</label>
                <br>
                <input type="password" name="password" class="form-control">
                <br>
                <br>
                <center>
                <button type="submit" class="btn btn-primary">Entrar</button>
                </center>
            </form>
 </div>           
</div>            
</div>  
</body>
</html>