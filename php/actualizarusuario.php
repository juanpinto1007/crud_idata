<?php 
if($_SERVER['REQUEST_METHOD']=='GET'){
    $usuario= unserialize(base64_decode($_GET['objeto']));
    $identidad_id=$usuario['identidad_id'];
    $nombre=$usuario['nombre'];
    $apellido=$usuario['apellido'];
    $rol=$usuario['nomrol'];

}

else if ($_SERVER['REQUEST_METHOD']=='POST'){  

    require_once 'usuariodao.php';
    $dao=new UsuarioDao();

 
  
        if(isset($_POST['identidad']) & isset($_POST['nombre']) & isset($_POST['apellido']) & isset($_POST['rol']) & isset($_POST['pass'])){ 
            
                $identidad_id=htmlspecialchars($_POST['identidad']);
                $nombre=htmlspecialchars($_POST['nombre']);
                $apellido=htmlspecialchars($_POST['apellido']);
                $rol=htmlspecialchars($_POST['rol']);
                $pass=htmlspecialchars($_POST['pass']);
  
                if(empty($identidad_id) | empty($nombre) | empty($apellido) | empty($rol) | empty($pass))
                {
                    $mensaje="Campo Vacio";
                }
                    
                
                  else { 
                     $mensaje = $dao->actualizarusuario($identidad_id,$nombre,$apellido,$rol,$pass);
                  } 
              
  
            }   
        
   
  

}
        require_once 'vistaactualizarus.php';
    
 