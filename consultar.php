<?php
include_once "../head.php";
if(isset($_SESSION['username'])){
    include "../controller/registroCalificaciones.php";
    ?>
    <div class="container">
        <div class ="row">
            <div class="col"></div>
            <div class ="col-sm-6 col-lg-8">

    <?php
            echo "<h2 class ='fs-3 text-center shadow p-2 mb-4 bg-body' >Matricula: <b>".$_SESSION['matricula']."</b>  Nombre: <b>".
            $_SESSION['username']."</b></h2>";
    if($_SESSION['rol']=='Administrador'){
        ?>

                <h2 class ="fs-2 text-center">Consulta de Calificaciones</h2>
                    <div class ="table-responsive">
                    <table class ="table table-hover">
                        <tr class ="table-primary">
                            <th scope ="row" class ='fs-6'>Matricula</th>
                            <th scope ="col" class ='fs-6'>Programación</th>
                            <th scope ="col" class ='fs-6'>Matematicas</th>
                            <th scope ="col" class ='fs-6'>Algoritmos</th>
                            <th scope ="col" class ='fs-6'>Logica</th>
                            <th scope ="col" class ='fs-6'>S.O.</th>
                            <th scope ="col" class ='fs-6'>B.D.</th>
                            <th scope ="col" class ='fs-6'>Opciones</th>        
                        </tr>
        <?php
           if(consultarCalifiGral()){
            foreach(consultarCalifiGral() as $fila){
                echo "<tr>";
                foreach($fila as $campo){
                    echo "<td class ='fs-4 text-center'>".$campo."</td>";
                }
                echo "<td class ='fs-5 text-center'><a href ='views/registrarCalificaciones.php?matricula=".$fila["matricula"]."' />Modificar</a></td>";
                echo "</tr>";
            }
            echo "</table>";
           } else {
               echo "<h2 class ='fs-2 text-center shadow p-2 mb-4 bg-body'>¡Lo Sentimos!, no se encontro algun registro.</h2>";
            } 
        ?>
                    </div>

    <?php
    }else if($_SESSION['rol']=='Estudiante'){
        ?>
                <h2 class ="fs-2 text-center">Consulta de Calificaciones</h2>
                    <div class ="table-responsive">
                        <table class ="table table-hover">
                            <tr class ="table-primary">
                                <th scope ="col" class ='fs-5'>Programación</th>
                                <th scope ="col" class ='fs-5'>Matematicas</th>
                                <th scope ="col" class ='fs-5'>Algoritmos</th>
                                <th scope ="col" class ='fs-5'>Logica</th>
                                <th scope ="col" class ='fs-5'>S.O.</th>
                                <th scope ="col" class ='fs-5'>B.D.</th>
                            </tr>
                            <tr>
        <?php
            if(consultarCalifAlum($_SESSION['matricula']))
            foreach (consultarCalifAlum($_SESSION['matricula']) as $calificacion){
                echo "<td class ='fs-4 text-center'> ".$calificacion."</td>";
            }
            ?>    
                            </tr>
                        </table>
                    </div>

        <?php
    }
}else {
    echo "<h2 class ='fs-2 text-center shadow p-2 mb-4 bg-body'> ¡Lo Sentimos!. Pagina no Localizada";
    echo "<p class ='fs-3 text-center shadow p-2 mb-4 bg-body'>Recuerda que puedes iniciar sesión <a href ='views/inicio.php'>dando clic aqui</a></p>";
}?>

</div>
<div class ="col"></div>
</div>
</div>

<?PHP
include_once "../footer.php";
?>