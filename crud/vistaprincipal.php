<?php
  require_once 'usuariodao.php';
  $dao=new UsuarioDao();
  $clientes=$dao->listaCliente();
  $tam=sizeof($clientes);
  require_once 'vistacliente.php';