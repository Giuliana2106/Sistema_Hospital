<<<<<<< HEAD
<?php
    class Conexion extends mysqli
    {
        function __construct()
        {
            $servidor="localhost";
            $pass="";
            $user="root";
            $BaseDatos="sistema_hospital";

            parent::__construct($servidor,$user,$pass,$BaseDatos);
            $this->query("SET NAMES 'utf8';");
            $this->connect_errno ? die('Error en la conexion'): $error='</br>Conectado '.$BaseDatos;
            unset($error);
        }
    }

?>
=======
<?php
    class Conexion extends mysqli
    {
        function __construct()
        {
            $servidor="localhost";
            $pass="";
            $user="root";
            $BaseDatos="sistema_hospital";

            parent::__construct($servidor,$user,$pass,$BaseDatos);
            $this->query("SET NAMES 'utf8';");
            $this->connect_errno ? die('Error en la conexion'): $error='</br>Conectado '.$BaseDatos;
            unset($error);
        }
    }

?>
>>>>>>> 5e6ae1fc2770772ac02d3ac5a993e9a9bad8e63c
