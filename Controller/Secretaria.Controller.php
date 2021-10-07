<?php
    class Secretaria
        {
            public $secretaria;
            public $smarty;
            

            public function __construct()
            {
                $this->secretaria=new Secretary();
                $this->smarty=new Smarty();
            }

            public function Registro()
            {
                $rol=$_POST['rol'];
                $nombre=$_POST['nombre'];
                $user=$_POST['user'];
                $pass=$_POST['pass'];
               // $rol=$_POST['Rol_idRol'];

                $con=$this->secretaria->CrearRegistro($rol, $nombre, $user, $pass);
                $this->smarty->assign('nav',"secretaria");
                $this->smarty->assign('title','Secretaria');
                $this->smarty->display('Secretaria.tpl');
            } 
            public function RegistroCitas()
            {
                $iduser=$_POST['Usuario_idUsuario'];
                $consult=$_POST['Consulta'];
                $edad=$_POST['Edad'];
                $fecha=$_POST['Fecha'];

                $con=$this->secretaria->Crearconsulta($iduser, $consult, $edad, $fecha);
                $this->smarty->assign('nav','secretaria');
                $this->smarty->assign('title','Secretaria');
                $this->smarty->display('Secretaria.tpl');
           

            } 
        }

?>
