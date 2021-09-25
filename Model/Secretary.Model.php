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
            $query="INSERT INTO `usuario`(`Rol_id_Rol`,`Nombre`, `User`, `Pass`) VALUES ('$rol', $nombre', '$user', '$pass');";
            $resultado=$this->con->query($query);
            $this->con->close();
            return $resultado;
        }
        
        public function Crearconsulta($iduser, $consult, $edad, $fecha, $hora)
        {
            $query="INSERT INTO `citas`(`Usuario_idUsuario`, `Consulta`,`Edad`, `Fecha`, `Hora`) VALUES ('$iduser''$consult','$edad','$fecha','$hora');";
            $resultado=$this->con->query($query);
            $this->con->close();
            return $resultado;
        }

        

    }
?>