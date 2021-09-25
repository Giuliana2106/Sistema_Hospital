<?php
    class Pacientes
    {
        public $con;
        public function __construct()
        {
            $this->con=new Conexion();
        }

        public function Registro($edad, $consulta, $DPI, $fecha)
        {
            $query="INSERT INTO `citas`(`edad`, `Consulta`, `fecha`, `DPI`) VALUES ($edad','$consulta','$fecha','$DPI');";
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