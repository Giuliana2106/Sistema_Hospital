<?php
    class Secretary
    {
        public $con;
        public function __construct()
        {
            $this->con=new Conexion();
            session_start();
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
            $query="INSERT INTO `usuario`(`Rol_idRol`,`Nombre`, `Usuario`, `Pass`) VALUES ('$rol', '$nombre', '$user', '$pass');";
            $resultado=$this->con->query($query);
            $this->con->close();
            return $resultado;
        }
        
        public function Crearconsulta($iduser, $consult, $edad, $fecha)
        {
            $query="INSERT INTO `citas`(`Usuario_idUsuario`, `Consulta`,`Edad`, `DPI`, `Fecha`) VALUES ('$iduser','$consult','$edad', '$DPI', '$fecha');";
            $resultado=$this->con->query($query);
            $this->con->close();
            return $resultado;
        }

        public function VerRegistros()
       {
           $query="SELECT * FROM `usuario` WHERE 1";
           $resultado=$this->con->query($query);
           $this->con->close();
           return $resultado;
       }

       public function VerCitas()
       {
           $query="SELECT * FROM `citas` WHERE 1";
           $resultado=$this->con->query($query);
           $this->con->close();
           return $resultado;
       }

       public function CitasNutricio()
        {
           $query="SELECT * FROM `citas` WHERE `Consulta`='Nutricionista';";
           $resultado=$this->con->query($query);
           $this->con->close();
           return $resultado;
        }

        public function CitasCardio()
        {
           $query="SELECT * FROM `citas` WHERE `Consulta`='Cardiologo';";
           $resultado=$this->con->query($query);
           $this->con->close();
           return $resultado;
        }

        public function CitasNutricio()
        {
           $query="SELECT * FROM `citas` WHERE `Consulta`='Nutricionista';";
           $resultado=$this->con->query($query);
           $this->con->close();
           return $resultado;
        }

        public function CitasPediatra()
        {
           $query="SELECT * FROM `citas` WHERE `Consulta`='Pediatra';";
           $resultado=$this->con->query($query);
           $this->con->close();
           return $resultado;
        }
    }
?>