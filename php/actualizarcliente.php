<?php 
if($_SERVER['REQUEST_METHOD']=='GET'){
    $cliente= unserialize(base64_decode($_GET['objeto']));
    $prinom=$cliente['prinombre'];
    $segnom=$cliente['segnombre'];
    $priapellido=$cliente['priapellido'];
    $segapellido=$cliente['segapellido'];
    $identidad_id=$cliente['identidad_id'];
    $ciudad=$cliente['ciudad'];
    $tel=$cliente['tel'];
    $email=$cliente['email'];
    $direccion=$cliente['direccion'];

}

else if ($_SERVER['REQUEST_METHOD']=='POST'){  

    require_once 'usuariodao.php';
    $dao=new UsuarioDao();

 
  
        if(isset($_POST['primernombre']) & isset($_POST['segundonombre']) & isset($_POST['primerapellido']) & isset($_POST['segundoapellido']) & isset($_POST['identidad'])
         & isset($_POST['ciudad']) &  isset($_POST['tel'])& isset($_POST['email'])& isset($_POST['direccion'])){ 
            
                $prinom=htmlspecialchars($_POST['primernombre']);
                $segnom=htmlspecialchars($_POST['segundonombre']);
                $priapellido=htmlspecialchars($_POST['primerapellido']);
                $segapellido=htmlspecialchars($_POST['segundoapellido']);
                $identidad_id=htmlspecialchars($_POST['identidad']);
                $ciudad=htmlspecialchars($_POST['ciudad']);
                $direccion=htmlspecialchars($_POST['direccion']);
                $email=htmlspecialchars($_POST['email']);
                $telefono=htmlspecialchars($_POST['tel']);
  
        
  
                if(empty($prinom) | empty($priapellido) | empty($segapellido) | empty($identidad_id)  | empty($ciudad)
                | empty($direccion)| empty($email)| empty($telefono))
                {
                    $mensaje="Campo Vacio";
                }
                    
                
                  else { 
                     $mensaje = $dao->actualizarcliente($prinom,$segnom,$priapellido,$segapellido,$identidad_id,$ciudad,$telefono,$email,$direccion);
                     if ($mensaje=="Actualizó Cliente con Exito!!") {
                        $identidad_id_usuario=$_SESSION['usuario'];
                        $fecha = date('Y-m-d');
                        $accion='Actualizó Cliente';
                        $dao->insertarhistorial($identidad_id_usuario,$fecha,$identidad_id,$accion);
                      }
                  } 
              
  
            }   
        
   
  

}
        require_once 'vistaactualizarcl.php';
    
 