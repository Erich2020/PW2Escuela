<?php
session_start();
if(isset($_SESSION['username'])){
    $validacion = "Bienvenido  <b>".$_SESSION['username']."</b> (<b>".$_SESSION['rol'].")</b>";
    if($_SESSION['rol']== 'Estudiante'){
        $menu = "<li class='nav-item'><a href ='views/consultar.php' class='nav-link active'>Consultar Calificaciones</a></li><li class='nav-item'><a href ='controller/cerrarsesion.php' class='nav-link active'>Cerrar Sesión</a></li>";
    }else if($_SESSION['rol']== 'Administrador'){
        $menu = "<li class='nav-item'><a href ='views/consultar.php' class='nav-link active'>Consultar Calificaciones</a></li><li class='nav-item'><a href ='controller/cerrarsesion.php' class='nav-link active'>Cerrar Sesión</a></li>";
    }
    $inactividad = 600;
    // Comprobar si $_SESSION["timeout"] está establecida
    if(isset($_SESSION["timeout"])){
        // Calcular el tiempo de vida de la sesión (TTL = Time To Live)
       $sessionTTL = time() - $_SESSION["timeout"];
       if($sessionTTL > $inactividad){
           session_destroy();
           header("Location: /index.php");
       }
    }
}else{
    $validacion = " Bienvenido  <b>Invitado</b>.";
    $menu = "<li class='nav-item'><a href ='views/registro.php' class='nav-link active'>Registro</a></li><li class='nav-item'><a href ='views/inicio.php' class='nav-link active' active>Login</a></li>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="keywords" content="universidad, tecnologica, licenciatura, preparatoria">
<meta charset ="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<base href="../../ActividadU2/">
<title>Universidad</title>
<link rel="icon" href="src/multimedia/Icono.png" type="image/png" sizes="20X30">
<!-- CDN Boostrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<link rel="stylesheet" href="src/disenio/stylos.css">
</head>
<body style = " background-image: url(src/multimedia/fondo.jpg); background-repeat: no-repeat;";>
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-info bg-gradient">
        <a href="index.php" class="col-lg-4 col-sm-2 p-1" ><img src="src/multimedia/logoEscuela.png" alt="logo_Institucional" style ="max-width:8vw;"></a>
        <a class="col-lg-4 col-sm-2 navbar-brand text-wrap fs-6 text-end"><?php
            echo $validacion;
            ?></a>
        <div class="container-fluid text-start">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a href="index.php" class="nav-link active" aria-current="page">
                    Inicio
                </a></li>
                <li class="nav-item"><a href="index.php#noticias" class="nav-link active" aria-current="page">
                Noticias
                </a></li>
                <li class="nav-item"><a href="index.php#acerca" class="nav-link active" aria-current="page">
                    Acerca de
                </a></li>
                <?php echo $menu;?>
            </ul>
        </div>
    </nav>

<div class ="container">
    <div class ="row p-2">
        <div class ="col"></div>
        <div class ="col-sm-6 col-lg-8 text-center">
        <div class ="row">
            <div class ="col"></div>
            <div class ="col">
                <div class = "jumbotron rounded bg-light p-0">
                <div class ="container">
                <img src="src/multimedia/logoEscuela.png" alt="" style ="max-width:100%">
                </div>
                </div>
            </div>
            <div class ="col"></div>
        </div>
            <h1 class ="fs-1">
                Escuela Tecnológica Xiuhcoatl
            </h1>
        </div>
        <div class ="col"></div>
    </div>

</div>
