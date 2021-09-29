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

            public function RegistroUsuario()
            {
                $rol=$_POST['Rol_idRol'];
                $nombre=$_POST['Nombre'];
                $user=$_POST['User'];
                $pass=$_POST['Pass'];
               // $rol=$_POST['Rol_idRol'];

                $z=$this->secretaria->CrearRegistro($rol, $nombre, $user, $pass);
                $this->smarty->assign('nav',"Secretaria");
                $this->smarty->assign('title','Secretaria');
                $this->smarty->display('Secretaria/Registro.tpl');
            } 
            public function RegistraCitas()
            {
                $iduser=$_POST['Usuario_idUsuario'];
                $consult=$_POST['Consulta'];
                $edad=$_POST['Edad'];
                $DPI=$_POST['DPI'];
                $fecha=$_POST['Fecha'];
                $hora=$_POST['Hora'];

                $m=$this->secretaria->Crearconsulta($iduser, $consult, $edad, $DPI, $fecha, $hora);
                $this->smarty->assign('nav','Secretaria');
                $this->smarty->assign('title','Secretaria');
                $this->smarty->display('Secretaria.tpl');
           

            } 
        }

?>
