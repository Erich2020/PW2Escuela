<?php
 include "../head.php";
?>
<div class="container">
    <div class ="row g-3">
        <div class="col"></div>
        <div class ="col-sm-4 col-lg-4 text-center shadow mb-4 p-4 bg-body">
            <h3 class ='fs-2 text-center'>Inicio de Sesión</h3>
                <form action="controller/inicioSesion.php" id ="finicio-sesion" method="post">
                    <div><label class ="form-label fs-5" for="user">Matricula</label>
                    <input class ="form-control text-center" type = "text" name ="user" placeholder ="Matricula" required/></div>
                    <div><label class ="form-label fs-5" for="pwd">Contraseña</label>
                    <input class ="form-control text-center" type = "password" name ="pwd" placeholder="Contraseña" required/></div>
                    <br>
                    <div><input class="btn btn-lg btn-info" type="submit" value="Iniciar"></div>
                </form>
        </div>
        <div class="col"></div>
    </div>
</div>

<?php
 include_once "../footer.php";
?>