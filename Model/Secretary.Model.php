<?php
    class Secretary
    {
        public $con;
        public function __construct()
        {
            $this->con=new Conexion();
        }

        public function VerRol()
        {
            $query="SELECT * FROM `rol`;";
            $resultado=$this->con->query($query);
            $this->con->close();
            return $resultado;
        }
        
        public function CrearRegistro($rol,$nombre,$user,$pass)
        {
            $query="INSERT INTO `usuario`(`Rol_idRol`, `Nombre`, `Usuario`, `Pass`) VALUES ('$rol','$nombre','$user','$pass');";
            echo($query);
            $resultado=$this->con->query($query);
            $this->con->close();
            return $resultado;
        }
        
        public function Crearconsulta($iduser, $consult, $edad, $DPI, $fecha, $hora)
        {
            $query="INSERT INTO `citas`(`Usuario_idUsuario`, `Consulta`,`Edad`, `DPI`, `Fecha`, `Hora`) VALUES ('$iduser''$consult','$edad', '$DPI', '$fecha','$hora');";
            echo($query);
            $resultado=$this->con->query($query);
            $this->con->close();
            return $resultado;
        }

        public function VerRegistros()
       {
           $query="SELECT * FROM `usuario`;";
           $resultado=$this->con->query($query);
           $this->con->close();
           return $resultado;
       }

        

    }
?>