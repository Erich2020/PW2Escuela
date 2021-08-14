<?php include_once "../head.php"; ?>
<div class="container">
<div class ="row">
<div class="col"></div>
<div class ="col-sm-6 col-lg-8text-center shadow p-2 mb-4 bg-body">
<h3 class ='fs-2 text-center'>Registro de Usuario</h3>
<form action="controller/registro.php" method="post" id ="fRegistro">
    <div class ="row">
    <div class ="col">
         <label class ="form-label fs-5" for="matricula">Matricula: </label>
        <input class ="form-control" name ="matricula" type="text" placeholder="ejemplo: A120023" pattern="^[a-zA-Z]{1}\d{1,14}$" required/>
    </div>
    <div class ="col">
        <label class ="form-label fs-5" for="nombre">Nombre</label>
        <input class ="form-control" name ="nombre" type="text"  pattern="^[a-zA-Z0-9-]{1,40}$" required />
    </div>
    </div>
    <div class ="row">
    <div class ="col"><label class ="form-label fs-5" for="apaterno">Apellido Paterno</label>
    <input class ="form-control" name ="apaterno" type="text"  pattern="^[a-zA-Z0-9-]{1,40}$" required /></div>
    <div class ="col"><label class ="form-label fs-5" for="amaterno">Apellido Materno</label>
    <input class ="form-control" name ="amaterno" type="text"  pattern="^[a-zA-Z0-9-]{1,40}$" required/></div>    
    </div>
    <div class ="text-center">
    <label class ="form-label p-1 fs-5" >sexo</label>
    <div class="form-check form-check-inline">
    <input class ="form-check-input" id ="r-masc" name ="sexo" type="radio" value ="Masculino" checked/>
        <label class ="form-check-label" for="r-masc">Masculino</label>
    </div>    
    <div class="form-check form-check-inline">
    <input class ="form-check-input" id ="r-fem"name ="sexo" type="radio" value ="Femenino"/>
        <label class ="form-check-label" for="r-fem">Femenino</label>
    </div>
    </div>
    <div class ="row">
    <div class ="col"><label class ="form-label fs-5" for="edad">Edad</label>
    <input class ="form-control" name ="edad" type="number"  placeholder="Edad en Años" pattern="^(\d{1,3})$" required/></div>
    <div class ="col"><label class ="form-label fs-5" for="telefono">Telefono de contacto</label>
    <input class ="form-control" name ="telefono" type="text"  pattern="^(\d{10})$" placeholder ="ejemplo: 1234567890"required/></div>
    </div>
    <div><label class ="form-label fs-5" for="email">Correo Electrónico</label>
    <input class ="form-control" name ="email" type="email"  pattern="^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$" placeholder ="ejemplo: correo@mail.com" required/></div>
    <div><label class ="form-label fs-5" for="contrasenia">Contraseña</label>
    <input class ="form-control" name ="contrasenia" type="password"  pattern="^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{8,16}$" placeholder ="Mínmo 8 Carácteres" required/></div>
    <div class="form-check form-check-inline"><p>
    <input class ="form-check-input" type="checkbox" name = "terminos" id ="tyc_id" required/> 
    <label  class ="form-check-label fs-6" for="tyc_id"> Para proceder con el registro es necesario aceptar nuestros
    <a href="">Terminos y Condiciones</a> y <a href="">Politicas de Privacidad</a>.</label></p></div>
    <div class ="text-center"><input class ="btn btn-lg btn-info fs-4"type ="submit" value="Registrar"/></div>
</form>
</div>
<div class="col"></div>
</div>
</div>
<?php
 include_once "../footer.php";
?>