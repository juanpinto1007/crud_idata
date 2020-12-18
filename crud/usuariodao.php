<?php
    include 'conexion.php';

    class UsuarioDao extends Conexion{


        public function listaUsuarios(){
            $conexion=Conexion::conectar();         
            $sql="SELECT * FROM usuario;";      
            $stmt = $conexion->prepare($sql); 
            $stmt->execute();
            $array=$stmt->fetchAll(PDO::FETCH_ASSOC);
            $stmt=null;  
            return $array;     
           }
           
        public function usuarioavanzado(){
            $conexion=Conexion::conectar();         
            $sql="SELECT identidad_id,nombre,apellido,nomrol FROM usuario INNER JOIN rol on usuario.idrol=rol.idrol;";      
            $stmt = $conexion->prepare($sql); 
            $stmt->execute();
            $array=$stmt->fetchAll(PDO::FETCH_ASSOC);
            $stmt=null;  
            return $array;     
           }
    
        public function insertarcliente($prinombre,$segnombre,$priapellido,$segapellido,$identidad_id,$ciudad,$telefono,$email,$direccion){

            $mensaje="";

            try{

                $conexion=Conexion::conectar();
            
                $stmt=$conexion->prepare("INSERT INTO cliente ( prinombre, segnombre, priapellido, segapellido, identidad_id,
                ciudad, tel,email, direccion) 
                VALUES ( :prinombre, :segnombre, :priapellido, :segapellido,:identidad_id,
                :ciudad,:tel,:email,:direccion )");
                $stmt->bindParam(":prinombre",$prinombre);
                $stmt->bindParam(":segnombre",$segnombre);
                $stmt->bindParam(":priapellido",$priapellido);
                $stmt->bindParam(":segapellido",$segapellido);
                $stmt->bindParam(":identidad_id",$identidad_id);
                $stmt->bindParam(":ciudad",$ciudad);
                $stmt->bindParam(":tel",$telefono);
                $stmt->bindParam(":email",$email);
                $stmt->bindParam(":direccion",$direccion);
                $stmt->execute();
                $mensaje= "Guardó con exito";

            }
            catch(PDOException $e){

                if ($e->errorInfo[1]==1062) {
                    $mensaje="Cliente Existe";
                }
                else if($e->errorInfo[1]==1406){
                  $mensaje="Error, por favor verificar la informacion suministrada.";
                }
                else{
                    echo $e->errorInfo[1];
                }

                $stmt=null;
            }
            return $mensaje;
        }

        public function listacliente(){
            $conexion=Conexion::conectar();         
            $sql="SELECT * FROM cliente;";      
            $stmt = $conexion->prepare($sql); 
            $stmt->execute();
            $array=$stmt->fetchAll(PDO::FETCH_ASSOC);
            $stmt=null;  
            return $array;     
        }

        
        public function actualizarcliente($prinombre,$segnombre,$priapellido,$segapellido,$identidad_id,$ciudad,$telefono,$email,$direccion){

            $mensaje="";
            try{
              
              $conexion=Conexion::conectar();
              $sql="update cliente set  prinombre=:prinombre, segnombre=:segnombre, priapellido=:priapellido, segapellido=:segapellido, 
              identidad_id=:identidad_id, ciudad=:ciudad, tel=:tel, email=:email, direccion=:direccion where identidad_id=:identidad_id";
              $stmt=$conexion->prepare($sql);
              $stmt->bindParam(":prinombre",$prinombre);
              $stmt->bindParam(":segnombre",$segnombre);
              $stmt->bindParam(":priapellido",$priapellido);
              $stmt->bindParam(":segapellido",$segapellido);
              $stmt->bindParam(":identidad_id",$identidad_id);
              $stmt->bindParam(":ciudad",$ciudad);
              $stmt->bindParam(":tel",$telefono);
              $stmt->bindParam(":email",$email);
              $stmt->bindParam(":direccion",$direccion);
              $stmt->execute();
              $mensaje="Actualizó Cliente con Exito!!";
    
            }
    
            catch(PDOException $e){
    
              $mensaje="Problemas al Actualizar Consulte con el Administrador del Sistema!!";
    
            }
    
            return $mensaje;
    
           }

           public function eliminarCliente($identidad_id){
            $mensaje="";
              try{
    
                $conexion=Conexion::conectar();
                $sql="delete from cliente where identidad_id=:identidad_id";
                $stmt=$conexion->prepare($sql);
                $stmt->bindParam(":identidad_id",$identidad_id);
                $stmt->execute();
                $mensaje="Eliminó, Cliente con Exito";            
    
              }
    
              catch(PDOException $e){
                $mensaje="Problemas al Eliminar consulte con el administrador";
    
              }
    
              return $mensaje;
          }

          public function insertarusuario($identidad_id,$nombre,$apellido,$rol,$pass){

            $mensaje="";

            try{

                $conexion=Conexion::conectar();
            
                $stmt=$conexion->prepare("INSERT INTO usuario ( identidad_id, nombre, apellido, idrol, pass) 
                VALUES ( :identidad_id, :nombre, :apellido, :rol,:pass)");
                $stmt->bindParam(":identidad_id",$identidad_id);
                $stmt->bindParam(":nombre",$nombre);
                $stmt->bindParam(":apellido",$apellido);
                $stmt->bindParam(":rol",$rol);
                $stmt->bindParam(":pass",$pass);
                $stmt->execute();
                $mensaje= "Guardó con exito";

            }
            catch(PDOException $e){

                if ($e->errorInfo[1]==1062) {
                    $mensaje="Usuario Existe";
                }
                else if($e->errorInfo[1]==1406){
                  $mensaje="Error, por favor verificar la informacion suministrada.";
                }
                else{
                    echo $e->errorInfo[1];
                }

                $stmt=null;
            }
            return $mensaje;
        }
        public function actualizarusuario($identidad_id,$nombre,$apellido,$idrol,$pass){

            $mensaje="";
            try{
              
              $conexion=Conexion::conectar();
              $sql="update usuario set  identidad_id=:identidad_id, nombre=:nombre, apellido=:apellido, idrol=:idrol, pass=:pass where identidad_id=:identidad_id";
              $stmt=$conexion->prepare($sql);
              $stmt->bindParam(":identidad_id",$identidad_id);
              $stmt->bindParam(":nombre",$nombre);
              $stmt->bindParam(":apellido",$apellido);
              $stmt->bindParam(":idrol",$idrol);
              $stmt->bindParam(":pass",$pass);
              $stmt->execute();
              $mensaje="Actualizó Usuario con Exito!!";
    
            }
    
            catch(PDOException $e){
    
              $mensaje="Problemas al Actualizar Consulte con el Administrador del Sistema!!";
    
            }
    
            return $mensaje;
    
           }

           public function eliminarUsuario($identidad_id){
            $mensaje="";
              try{
    
                $conexion=Conexion::conectar();
                $sql="delete from usuario where identidad_id=:identidad_id";
                $stmt=$conexion->prepare($sql);
                $stmt->bindParam(":identidad_id",$identidad_id);
                $stmt->execute();
                $mensaje="Eliminó, Usuario con Exito";            
    
              }
    
              catch(PDOException $e){
                $mensaje="Problemas al Eliminar consulte con el administrador";
    
              }
    
              return $mensaje;
          }



     
        public function insertarhistorial($identidad_id,$fecha,$identidad_cliente,$accion){

            $mensaje="";

            try{

                $conexion=Conexion::conectar();
            
                $stmt=$conexion->prepare("INSERT INTO historial ( identidad_id, fecha, identidad_cliente, accion) 
                VALUES ( :identidad_id, :fecha, :identidad_cliente,:accion)");
                $stmt->bindParam(":identidad_id",$identidad_id);
                $stmt->bindParam(":fecha",$fecha);
                $stmt->bindParam(":identidad_cliente",$identidad_cliente);
                $stmt->bindParam(":accion",$accion);
                $stmt->execute();
                $mensaje= "Guardó con exito";

            }
            catch(PDOException $e){

                if ($e->errorInfo[1]==1062) {
                    $mensaje="Usuario Existe";
                }
                else if($e->errorInfo[1]==1406){
                  $mensaje="Error, por favor verificar la informacion suministrada.";
                }
                else{
                    echo $e->errorInfo[1];
                }

                $stmt=null;
            }
            return $mensaje;
        }

        public function listaHistorial(){
            $conexion=Conexion::conectar();         
            $sql="SELECT * FROM historial;";      
            $stmt = $conexion->prepare($sql); 
            $stmt->execute();
            $array=$stmt->fetchAll(PDO::FETCH_ASSOC);
            $stmt=null;  
            return $array;     
        }
     

    }