<?php
class Conexion {
    private  $host = "mysql:host=localhost; dbname=id15300393_escuela";
    private  $user = "root"; //"id15300393_pw2";
    private  $pwd = "";//")gfNrQibG6fyp/(J";
    public $pdo; 

    public function conectar(){
    try{
        $this->pdo = new PDO($this->host,$this->user, $this->pwd);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, pdo::ERRMODE_EXCEPTION);
        return true;
    }catch(PDOException $pe){
                echo "Error de conexion ". $pe->getMessage();
                return false;
        }
    }

    public function consultarAsignaturas(){
        try{
            $this->conectar();
            $this->pdo->prepare('Select nombre From asignaturas');
            $this->pdo->execute();
            return $this->pdo->fetchAll();
        }catch(PDOException $pe){
            echo "Error de conexion ". $pe->getMessage();
        }
    }
}
/**
CREATE DATABASE id15300393_escuela;
use id15300393_escuela;
create table usuario(
	matricula varchar(15) not null primary key, 
    nombre varchar(40) not null, 
    apaterno varchar(40) not null,
    amaterno varchar(40),
    sexo char(1) not null,
    edad int not null,
    telefono varchar(10) not null,
    email varchar(40) not null,
    pwd varchar(40) not null,
    tipo char(1) not null
);

create table calificaciones(
	matricula varchar(15) not null primary key,
    programacion int not null,
    Matematicas int not null,
    Algoritmos  int not null,
    logica int not null,
    SO int not null,
    BD int not null,
    FOREIGN key (matricula) REFERENCES usuario(matricula)
);
Insert Into usuario VALUES ('0000','Erick','Lopez','Lara','M','26','0123456789','erich20@nube.mx','progweb2#','A');
 */
?>