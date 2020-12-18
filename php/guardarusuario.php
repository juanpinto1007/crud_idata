
<?php 
 
 require_once 'usuariodao.php';

 $dao=new UsuarioDao();

  if(isset($_POST['boton'])){
  if($_POST['boton']=='Registrar'){  

      if(isset($_POST['identidad']) & isset($_POST['nombre']) & isset($_POST['apellido']) & isset($_POST['rol']) & isset($_POST['pass'])){ 
          
              $identidad_id=htmlspecialchars($_POST['identidad']);
              $nombre=htmlspecialchars($_POST['nombre']);
              $apellido=htmlspecialchars($_POST['apellido']);
              $rol=htmlspecialchars($_POST['rol']);
              $pass=htmlspecialchars($_POST['pass']);

              if(empty($identidad_id) | empty($nombre) | empty($apellido) | empty($rol)  | empty($pass))
              {
                  $mensaje="Campo Vacio";
              }
              else { 
              $mensaje = $dao->insertarusuario($identidad_id,$nombre,$apellido,$rol,$pass);
            } 
            
          }   
               
       
 
      


  } 




}
  require_once 'vistausuario.php';
          