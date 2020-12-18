<?php

            if(isset($_GET['accion'])){
            
                if($_GET['accion']=="registrocliente"){
                    require_once 'registrocliente.php';
                }
                else if($_GET['accion']=="vistaprincipal"){
                    require_once 'vistaprincipal.php';
                }
                 else if($_GET['accion']=="vistaprincipalusuario"){
                    require_once 'vistaprincipalusuario.php';
                }
                else if($_GET['accion']=="actualizarusuario"){
                    require_once 'actualizarusuario.php';
                }
               else if($_GET['accion']=="actualizarcliente"){
                    require_once 'actualizarcliente.php';
                }
                else if($_GET['accion']=="guardarcliente"){
                    require_once 'guardarcliente.php';
                }
                else if($_GET['accion']=="eliminarcliente"){
                    require_once 'eliminarcliente.php';
                }
                else if($_GET['accion']=="vistausuario"){
                    require_once 'vistausuario.php';
                }
                else if($_GET['accion']=="guardarusuario"){
                    require_once 'guardarusuario.php';
                }
                else if($_GET['accion']=="eliminarusuario"){
                    require_once 'eliminarusuario.php';
                }

                else if($_GET['accion']=="historial"){
                    require_once 'vistahistorial.php';
                }

                
                
                
            }
            else{
                require_once 'bienvenida.php';
            }



    
     


           