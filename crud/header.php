<br>
<div class="container">
   <ul class="nav nav-pills">
    <li class="nav-item">
        <a class="nav-link
        <?php
        if($accion=="inicio") echo "active";
        ?>             
        " href="inicio">Inicio</a>
    </li>
    <li class="nav-item">
        <a class="nav-link 
        <?php
        if($accion=="registrocliente") echo "active";
        ?>          
        " href="?accion=registrocliente">Registro Cliente</a>
    </li>
    <?php
      if( $_SESSION['rol']==1){ ?>
    <li class="nav-item">
        <a class="nav-link 
        <?php
        if($accion=="vistausuario") echo "active";
        ?>         
        " href="?accion=vistausuario">Guardar Usuario</a>
    </li>   
    <li class="nav-item">
        <a class="nav-link 
        <?php
        if($accion=="historial") echo "active";
        ?>         
        " href="?accion=historial">Historial</a>
    </li>   
   <?php } ?>
       
  </ul>
</div>

<br>