<?php
include_once "../head.php";
include "../controller/usuario.php";
if($_SESSION['rol']=='Administrador'){
    if($_SERVER['REQUEST_METHOD']=='GET'){
        if(isset($_GET['matricula'])){
            $uAlumno =new usuario;
            if($uAlumno->consultarUsuario($_GET['matricula']) & $uAlumno->getTipoUsuario()=='E'){
                $nombreAlumno = $uAlumno->getNombre()." ".$uAlumno->getAPaterno()." ".$uAlumno->getAMaterno();
                $_SESSION['matAlumno'] = $_GET['matricula'];
            } else {
                include "../head.php";
                echo "<h2>¡Lo sentimos!, <br> El numero de matricula no existe.</h2>";
                include "../footer.php";
            }
        }
    }
?>
<div class="container">
<div class ="row">
<div class="col"></div>
<div class ="col-sm-6 col-lg-6 text-center shadow p-2 mb-4 bg-body">
    <h2 class ='fs-2 text-center'>Registro de Calificaciones</h2>
    <h3 class ='fs-3 text-center'>Matricula del Alumno: <?php echo $_SESSION['matAlumno']; ?> Nombre Alumno: <?php echo $nombreAlumno;  ?></h3>
    <form action="controller/registroCalificaciones.php" method = 'Post'>
    <div class ="container-fluid">
    <div class ="row"><label class ="col form-label fs-5" for="programacion">Programación</label><input class ="col form-control" type="number" name ="programacion" pattern ="/^\d{3}$/"max ="100" min ="0"  required></div>
    <div class ="row"><label class ="col form-label fs-5" for="matematicas">Matematicas</label><input class ="col form-control" type="number" name ="matematicas" pattern ="/^\d{3}$/"max ="100" min ="0"  required></div>
    <div class ="row"><label class ="col form-label fs-5" for="algoritmos">Algoritmos</label><input class ="col form-control" type="number" name ="algoritmos" pattern ="/^\d{3}$/"max ="100" min ="0"  required></div>
    <div class ="row"><label class ="col form-label fs-5" for="logica">Logica</label><input class ="col form-control" type="number" name ="logica" pattern ="/^\d{3}$/"max ="100" min ="0"  required></div>
    <div class ="row"><label class ="col form-label fs-5" for="so">SO</label><input class ="col form-control" type="number" name = "so" pattern ="/^\d{3}$/" max ="100" min ="0"  required></div>
    <div class ="row"><label class ="col form-label fs-5" for="bd">BD</label><input class ="col form-control" type="number" name ="bd" pattern ="/^\d{3}$/" max ="100" min ="0" required></div>
    </div>
    <br>
    <input class="btn btn-lg btn-info" type="submit" value ="Registrar">
    </form>
</div>
<div class="col"></div>
</div>
</div>
<?php
}
include "../footer.php"
?>
