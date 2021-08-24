<?php
    class User
    {
        public $usuario;
        public function __construct()
        {
            $this->usuario=new Usuario();
        }

        public function BuscarUsuario()
        {
            $user=$_POST['nombre'];
            $pass=$_POST['pass'];
            
            $u=$this->usuario->BuscarUsuario($user,$pass);
        }
    }

?>