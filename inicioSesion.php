<?php 
include "../head.php";
include 'usuario.php';

if($_SERVER['REQUEST_METHOD']=='POST'){

    if(isset($_POST['user']) & isset($_POST['pwd'])){

        $user = new usuario;
        if($user->consultarUsuario($_POST['user'])){
            if(!strcmp($user->getPwd(),$_POST['pwd'])){
                $_SESSION['username'] = $user->getNombre()." ".$user->getAPaterno()." ".$user->getAMaterno();
                $_SESSION["timeout"] = time();
                $_SESSION['matricula'] = $user->getMatricula();
                $_SESSION['rol'] = ($user->getTipoUsuario()=='A')? 'Administrador' : 'Estudiante';
                echo $_SESSION['rol'];
                echo "<script> window.location='index.php'; </script>";
            }else{
                echo json_encode("Las credenciales de acceso no son validas");
                echo "<br><a href='index.php'>regresar</a>" ; 
            }
        }else{
            echo json_encode("Las credenciales de acceso no son validas");
            echo "<br><a href='index.php'>regresar</a>" ; 
            
        }
        
    }

}else{
 echo "Algo salio mal";
}

include "../footer.php";
?>