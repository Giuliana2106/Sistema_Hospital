<?php
    class Paciente
    {
        public $con;
        public function __construct()
        {
            $this->con=new Conexion();
        }

        public function Registro()
        {
            $query="SELECT * FROM `citas`;";
            $resultado=$this->con->query($query);
            $this->con->close();
            return $resultado();
        }
    }
?>