<?php

if ($_SERVER['REQUEST_METHOD']=='GET') {
    require_once 'usuariodao.php';
    $dao=new UsuarioDao();
    $identidad_id=base64_decode($_GET['identidad_id']);
    $dao->eliminarUsuario($identidad_id);

    header("location:?accion=vistaprincipalusuario");

}