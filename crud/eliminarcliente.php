<?php

if ($_SERVER['REQUEST_METHOD']=='GET') {
     
    $identidad_id=base64_decode($_GET['identidad_id']);
    require_once 'usuariodao.php';
    $dao=new UsuarioDao();
    $dao->eliminarCliente($identidad_id);
        $identidad_id_usuario=$_SESSION['usuario'];
        $fecha = date('Y-m-d');
        $accion='Eliminó Cliente';
        $dao->insertarhistorial($identidad_id_usuario,$fecha,$identidad_id,$accion);
    header("location:?accion=vistaprincipal");

}