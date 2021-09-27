<?php
    class Cardiologo
    {
        public $con;
        public function __construct()
        {
            $this->con=new Conexion();
        }

        public function Registro()
        {
            $query="SELECT * FROM `citas` WHERE Consulta = 'Cardiólogo'";
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
