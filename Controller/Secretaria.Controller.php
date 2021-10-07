<?php
    class Secretaria
        {
            public $secre;
            public $smarty;
            

            public function __construct()
            {
                $this->secre=new Secretary();
                $this->smarty=new Smarty();
            }

            public function RegistroUsuario()
            {
                $rol=$_POST['rol'];
                $nombre=$_POST['nombre'];
                $user=$_POST['user'];
                $pass=$_POST['pass'];
               // $rol=$_POST['Rol_idRol'];

                $z=$this->secre->CrearRegistro($rol, $nombre, $user, $pass);
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

                $m=$this->secre->Crearconsulta($iduser, $consult, $edad, $DPI, $fecha, $hora);
                $this->smarty->assign('nav','Secretaria');
                $this->smarty->assign('title','Secretaria');
                $this->smarty->display('Secretaria.tpl');
           

            } 
        }

?>
