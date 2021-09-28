<?php
    class Pacientes
    {
        public $con;
        public function __construct()
        {
            $this->con=new Conexion();
            session_start();
        }

        public function Registro($edad, $consulta, $DPI, $fecha)
        {
            $S=$_SESSION['id_Usuario'];
            $query="INSERT INTO `citas`(`Usuario_idUsuario`, `Edad`, `Consulta`, `Fecha`, `DPI`) VALUES ('$S', '$edad', '$consulta', '$fecha', '$DPI');";
            echo($query);
            $resultado=$this->con->query($query);
            $this->con->close();
            return $resultado;
        }

        public function VerCita($id)
       {
           $query="SELECT * FROM `citas` WHERE `Usuario_idUsuario`='$id';";
           $resultado=$this->con->query($query);
           $this->con->close();
           return $resultado;
       }
    }
?>