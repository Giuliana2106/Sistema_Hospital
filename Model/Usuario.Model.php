<<<<<<< HEAD
<?php
    class Usuario
    {
        public $con;

        public function __construct()
        {
            $this->con=new Conexion();
        }

        public function BuscarUsuario($user,$pass)
        {
            $query="SELECT * FROM `usuario` WHERE `Nombre`='$user' AND `Pass`='$pass';";
            $consulta=$this->con->query($query);
            $this->con->close();
            return $consulta;
        }
    }
=======
<?php
    class Usuario
    {
        public $con;

        public function __construct()
        {
            $this->con=new Conexion();
        }

        public function BuscarUsuario($user,$pass)
        {
            $query="SELECT * FROM `usuario` WHERE `Nombre`='$user' AND `Pass`='$pass';";
            $consulta=$this->con->query($query);
            $this->con->close();
            return $consulta;
        }
    }
>>>>>>> 5e6ae1fc2770772ac02d3ac5a993e9a9bad8e63c
?>