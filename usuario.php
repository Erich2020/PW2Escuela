<?php
include_once "conexion.php";
class usuario{
    private $matricula, $nombre, $aPaterno, $aMaterno, 
    $sexo, $edad, $telefono, $email, $contrasenia, $tipoUsuario; 
    private $conn;


    public function getMatricula(){return $this->matricula;}
    public function setMatricula(string $valor){        
        if(preg_match('/^[a-zA-Z]{1}\d{1,14}$/', $valor)>=1){
        if($this->consultarUsuario($valor)){
            echo "El usuario ya existe.";
            return false;
        }else{
            $this->matricula = $valor;
            return true;    
        }
    }
    else{
        return false; 
    } 
}
    public function getNombre(){return $this->nombre;}
    public function setNombre(string $valor){        
        if(preg_match('/^[a-zA-Z0-9- ]{1,40}$/', $valor)>=1){
         $this->nombre = $valor;
        return true;
        }
        else{
        return false; 
        } 
    }
    public function getAPaterno(){return $this->aPaterno;}
    public function setAPaterno(string $valor){        
        if(preg_match('/^[a-zA-Z0-9-]{1,40}$/', $valor)>=1 ){
        $this->aPaterno = $valor;
        return true;
    }
    else{
        return false; 
    } }

    public function getAMaterno(){return $this->aMaterno;}
    public function setAMaterno(string $valor){        
        if(preg_match('/^[a-zA-Z0-9-]{1,40}$/', $valor)>=1){
        $this-> aMaterno= $valor;
        return true;
    }
    else{
        return false; 
    } }

    public function getSexo(){return $this->sexo;}
    public function setSexo(string $valor){        
        if(preg_match('/^[A-Z]{1}$/', $valor)>=1 ){
        $this->sexo = $valor;
        return true;
    }
    else{
        return false; 
    } }

    public function getEdad(){return $this->edad;}
    public function setEdad(string $valor){        
        if(preg_match('/^(\d{1,3})$/', $valor)>=1  ){
        $this->edad = $valor;
        return true;
    }
    else{
        return false; 
    } }

    public function getTelefono(){return $this->telefono;}
    public function setTelefono(string $valor){        
        if(preg_match('/^(\d{10})$/', $valor)>=1 ){
        $this->telefono = $valor;
        return true;
    }
    else{
        return false; 
    } }

    public function getEmail(){return $this->email;}
    public function setEmail(string $valor){        
        if(preg_match('/^([a-zA-Z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/', $valor)>=1 ){
        $this->email = $valor;
        return true;
    }
    else{
        return false; 
    } }

    public function getPwd(){return $this->contrasenia;}
    public function setPwd(string $valor){ 
        if(preg_match('/^([a-zA-Z0-9!@#$&*])\S{8,16}$/', $valor)>=1){
            $this->contrasenia = $valor;
            return true;
        }
        else{
            return false; 
        }
    }

    public function getTipoUsuario(){return $this->tipoUsuario;}
    public function setTipoUsuario(string $valor){        
        if(preg_match('/^[A-Z]{1}$/', $valor)>=1 ){
        $this->tipoUsuario = $valor;
        return true;
        }
        else{
        return false; 
        } 
    }

    /**
     * Este método realiza el registro en la base de datos de la entidad alumno 
    */
    public function registrar(){
        try {
            $conn = new Conexion;
            if($conn->conectar()){
                $query ="Insert Into usuario Values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ";
                $sql = $conn->pdo->prepare($query);
                $sql->bindParam(1, $this->matricula,PDO::PARAM_STR);
                $sql->bindParam(2, $this->nombre,PDO::PARAM_STR);
                $sql->bindParam(3, $this->aPaterno,PDO::PARAM_STR);
                $sql->bindParam(4, $this->aMaterno,PDO::PARAM_STR);  
                $sql->bindParam(5, $this->sexo, PDO::PARAM_STR_CHAR);
                $sql->bindParam(6, $this->edad, PDO::PARAM_INT);
                $sql->bindParam(7, $this->telefono,PDO::PARAM_STR);
                $sql->bindParam(8, $this->email,PDO::PARAM_STR);
                $sql->bindParam(9, $this->contrasenia,PDO::PARAM_STR);
                $sql->bindParam(10, $this->tipoUsuario, PDO::PARAM_STR_CHAR);
                return ($sql->execute())?true:false;
            }else{
                echo "Error en al conectar DB en consultaUsuario";
                return false;
            }
        }
        catch(PDOException $pe){
            $mensaje = "Error en la sentencia ".$pe->getMessage();
        }

    }

    /**
     * Este método permite eliminar un alumno de la base de datos, por medio de la matricula. 
     */
    public function eliminar(){
        try {
            $conn = new Conexion;
            if($conn->conectar()){
                $query ="delete from usuario where matricula = ?;";
                $sql = $conn->pdo->prepare($query);
                $sql->bindParam(1, $this->matricula);
                return ($sql->execute())?true:false;
            }else{
                echo "Error en al conectar DB en consultaUsuarios";
            }
        }
        catch(PDOException $pe){
            $mensaje = "Error en la sentencia ".$pe->getMessage();
        }
    }

    /**
     * Este método permite modicar los datos de un registro en la entidad alumno de la base de datos
     */
    public function modificar(){
        try {
            $conn = new Conexion;
            if($conn->conectar()){
                $query ="Update usuario Set matricula = ?, ".
                "nombre = ?, apaterno = ?, amaterno = ?, ".
                "sexo = ?, edad = ?, telefono = ?, email = ?, pwd = ?, tipo = ? ".
                "where matricula = ? ;";
                $sql = $conn->pdo->prepare($query);
                $sql->bindParam(1, $this->matricula);
                $sql->bindParam(2, $this->nombre);
                $sql->bindParam(3, $this->aPaterno);
                $sql->bindParam(4, $this->aMaterno);
                $sql->bindParam(5, $this->sexo);
                $sql->bindParam(6, $this->edad);
                $sql->bindParam(7, $this->telefono);
                $sql->bindParam(8, $this->email);
                $sql->bindParam(9, $this->contrasenia);
                $sql->bindParam(10,$this->tipoUsuario);
                $sql->bindParam(11, $this->matricula);
                return ($sql->execute())?true:false;
            }else{
                echo "Error en al conectar DB en consultaAlumnos";
            }
        }
        catch(PDOException $pe){
            $mensaje = "Error en la sentencia ".$pe->getMessage();
        }

    }

    /**
     * Este método consulta un alumno especifico almacenado en la base de datos por medio de su matricula.
     * @param matricula.
     * Si existe el registro carga los datos del alumno y devuelve verdadero, sino solo devuelve falso. 
     */
    public function consultarUsuario(string $matricula){
        try {
            $conn = new Conexion;
            if($conn->conectar()){
                $query ="Select * from usuario where matricula = ?";
                $sql = $conn->pdo->prepare($query);
                $sql->bindParam(1, $matricula);
                $sql->execute();
                if($resultado = $sql->fetch())
                {
                $this->matricula = $resultado['matricula'];
                $this->nombre = $resultado['nombre'];
                $this->aPaterno = $resultado['apaterno']; 
                $this->aMaterno = $resultado['amaterno']; 
                $this->sexo = $resultado['sexo'];
                $this->edad = $resultado['edad']; 
                $this->telefono = $resultado['telefono']; 
                $this->email = $resultado['email']; 
                $this->contrasenia = $resultado['pwd'];
                $this->tipoUsuario = $resultado['tipo'];
                return true;}
            else {
                    return false;}
            }else{
                echo "Error en al conectar DB en consultaAlumnos";
                $resultado = null;
                return false;
            }
        }
        catch(PDOException $pe){
            $mensaje = "Error en la sentencia ".$pe->getMessage();
        }
        return (isset($resultado))? true : false;
    }

    /**
     * Este metodo permite consultar los alumnos existentes en la entidad Alumno de la base de datos.
     * devuelve una lista de alumnos
     */
    public function consultarUsuarios(){
        try {
            $conn = new Conexion;
            if($conn->conectar()){
                $query ="Select * From usuario;";
                $sql = $conn->pdo->prepare($query);
                $sql->execute();
                $resultado = $sql->fetchAll();
            }else{
                echo "Error en al conectar DB en consultaAlumnos";
                $resultado = null;
            }
        }
        catch(PDOException $pe){
            $mensaje = "Error en la sentencia ".$pe->getMessage();
        }
        return $resultado; 
    }

}
?>