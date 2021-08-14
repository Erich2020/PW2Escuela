<?php
include_once "../head.php";
include_once 'conexion.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['programacion']) & isset($_POST['matematicas']) & isset($_POST['logica'])
    & isset($_POST['algoritmos']) & isset($_POST['so']) & isset($_POST['bd'])){
        if(validarNumero($_POST['programacion']) & validarNumero($_POST['matematicas']) & validarNumero($_POST['logica']) &
        validarNumero($_POST['algoritmos']) & validarNumero($_POST['so']) & validarNumero($_POST['bd']) ){
            registrarCalificaciones($_SESSION['matAlumno'],1,$_POST['programacion'], $_POST['matematicas'],
            $_POST['algoritmos'],$_POST['logica'],$_POST['so'],$_POST['bd']);
            echo "<h2>Las calificaciones se han Actualizado con éxito.</h2>";
            echo "<a href='views/consultar.php'>Regresar</a>";
        }
        else{
            echo "Las calificaciones registradas no son validas, recuerde ingresar calificaciones del 0 al 100.";
            echo "<a href='views/consultar.php'>Regresar</a>";
        }

    }

    include "../footer.php";

}

function validarNumero(string $valor){
    if (preg_match("/^\d{3}$/", $valor)>=0){
        return ((int)$valor <= 100 & (int)$valor >= 0)?true : false;
    }else return false;
}

function consultarCalifiGral(){
    $conn = new Conexion;
    $conn->conectar();
    try{
        $query ="Select * from calificaciones";
        $sql = $conn->pdo->prepare($query);
        $sql->execute();
        return $sql ->fetchAll(pdo::FETCH_ASSOC);
    } catch(PDOException $pe){
        echo json_encode("Error de conexion ". $pe->getMessage());
    }
}

function consultarCalifAlum(string $matricula){
    $conn = new Conexion;
    $conn->conectar();
    try{
        $query ="Select programacion, Matematicas, Algoritmos, logica, SO, BD from calificaciones Where matricula = ?";
        $sql  = $conn->pdo->prepare($query);
        $sql->bindParam(1, $matricula);
        $sql->execute();
        return $sql->fetch(pdo::FETCH_ASSOC);
    } catch(PDOException $pe){
        echo json_encode("Error de conexion ". $pe->getMessage());
    }

}

function registrarCalificaciones(string $matricula, string $calif1, string $calif2, 
    string $calif3, string $calif4, string $calif5, string $calif6 ){
    $conn = new Conexion;
    $conn->conectar();
    try{
        $query ="Update calificaciones set programacion=? ,Matematicas =?,Algoritmos=?,logica=?,SO=?,BD=? where matricula=?";
        $sql = $conn->pdo->prepare($query);
        $sql->bindParam(1, $calif1, PDO::PARAM_INT);
        $sql->bindParam(2, $calif2, PDO::PARAM_INT);
        $sql->bindParam(3, $calif3, PDO::PARAM_INT);
        $sql->bindParam(4, $calif4, PDO::PARAM_INT);
        $sql->bindParam(5, $calif5, PDO::PARAM_INT);
        $sql->bindParam(6, $calif6, PDO::PARAM_INT);
        $sql->bindParam(7, $matricula, PDO::PARAM_STR);
        return $sql->execute();
    } catch(PDOException $pe){
        echo json_encode("Error de conexion ". $pe->getMessage());
    }
    
}

function primerRegistro(string $matricula, string $calif1, string $calif2, 
string $calif3, string $calif4, string $calif5, string $calif6 ){
$conn = new Conexion;
$conn->conectar();
try{
    $query ="Insert into calificaciones Values(?,?,?,?,?,?,?)";
    $sql = $conn->pdo->prepare($query);
    $sql->bindParam(1, $matricula, PDO::PARAM_STR);
    $sql->bindParam(2, $calif1, PDO::PARAM_INT);
    $sql->bindParam(3, $calif2, PDO::PARAM_INT);
    $sql->bindParam(4, $calif3, PDO::PARAM_INT);
    $sql->bindParam(5, $calif4, PDO::PARAM_INT);
    $sql->bindParam(6, $calif5, PDO::PARAM_INT);
    $sql->bindParam(7, $calif6, PDO::PARAM_INT);
    return $sql->execute();
} catch(PDOException $pe){
    echo json_encode("Error de conexion ". $pe->getMessage());
}
}


?>