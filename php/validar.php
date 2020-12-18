
      <?php
    
    require_once 'usuariodao.php';
  
    if(isset($_POST['usuario']) & isset($_POST['password'])){

    $dao=new UsuarioDao();
    $consulta = $dao->listaUsuarios();
    $tam=sizeof($consulta);
    $usuario=htmlspecialchars($_POST['usuario']);
    $password=htmlspecialchars($_POST['password']);
    session_start();
    session_regenerate_id();
    $_SESSION['usuario']=$usuario;
  for($i=0;$i<$tam;$i++)
     {       
    if ($usuario==$consulta[$i]['identidad_id'] && $password==$consulta[$i]['pass']) {
      $_SESSION['rol'] = $consulta[$i]['idrol'];
          header("location: inicio.php");  
             
    } 
    else{
      $mensaje="Usuario o Password Invalido";
      require_once  "index.php" ; 
    }
  
}   
} 



?>
  