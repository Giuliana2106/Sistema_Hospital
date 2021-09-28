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

        public function VerCita()
       {
           $query="SELECT * FROM `citas`;";
           $resultado=$this->con->query($query);
           $this->con->close();
           return $resultado;
       }
    }
?>