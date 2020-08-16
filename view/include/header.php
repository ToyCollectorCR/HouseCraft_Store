<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
<header>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
              <a class="navbar-brand" href="#">HouseCraft</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Administrador <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <?php if(isset($_SESSION['usuarioLogueado'])): ?>
                   <li><a href="index.php?controller=usuario&action=mostrarBuscar">Buscar Usuarios</a></li>
                   <li><a href="index.php?controller=usuario&action=mostrarRegistar">Agregar Usuario</a></li>
                   <li><a href="index.php?controller=usuario&action=listar">Modificar Usuario</a></li>
                   <li><a href="index.php?controller=Estudiante&action=mostrarRegistar">Listado Ordenes de Compra</a></li>
                   <li><a href="index.php?controller=Estudiante&action=mostrarRegistar">Mantenimiento Categorías</a></li>
                   <?php endif;?>
                   
                </ul>                
              </li>               
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Artesano <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                   <?php if(isset($_SESSION['usuarioLogueado'])): ?>
                    <li><a href="index.php?controller=Estudiante&action=listar">Modificar Datos Personales</a></li>
                   <li><a href="index.php?controller=Carrera&action=listar">Buscar Articulos</a></li>
                   <li><a href="index.php?controller=Curso&action=listar">Agregar Articulos</a></li>
                   <li><a href="index.php?controller=Profesor&action=listar">Eliminar Articulos</a></li>
                    <li><a href="index.php?controller=Profesor&action=listar">Modificar Articulos</a></li>
                     <li><a href="index.php?controller=Profesor&action=listar">Listado de órdenes de compra</a></li>
                   <?php endif;?>
                </ul>                
              </li>  
              <li class="dropdown">
                <?php if(isset($_SESSION['usuarioLogueado'])): ?>  
                <a href="index.php?controller=usuario&action=cerrarSesion" class="dropdown-toggle" role="button" aria-expanded="false">Cerrar Sesión</a>
                <?php else:?>
                <a href="index.php?controller=usuario&action=mostrarLogin" class="dropdown-toggle" role="button" aria-expanded="false">Login</a>
                <?php endif;?>
              </li>               
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->        
      </nav>
</header>
    