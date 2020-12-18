<?php
  require_once 'usuariodao.php';
  $dao=new UsuarioDao();
  $usuarios=$dao->usuarioavanzado();
  $tam=sizeof($usuarios);
  require_once 'controlusuario.php';