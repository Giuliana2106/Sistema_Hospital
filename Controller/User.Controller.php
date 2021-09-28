<?php
    class User
    {
        public $smarty;
        public $usuario;
        public function __construct()
        {
            $this->usuario=new Usuario();
            $this->smarty=new Smarty();
            session_start();
        }

        public function BuscarUsuario()
        {
            $user=$_POST['nombre'];
            $pass=$_POST['pass'];
            
            $u=$this->usuario->BuscarUsuario($user,$pass);

            if($u->num_rows==1)
            {
                $arr=array();
                while ($fila=mysqli_fetch_assoc($u))
                {
                    array_push($arr,$fila);
                }
                $_SESSION['id_Usuario']=$arr[0]['idUsuario'];
                if ($arr[0]['Rol_idRol']==1)
                {
                    $this->smarty->assign('title','Doctor');
                    $this->smarty->display('Cardiologo.tpl');
                }
                else if ($arr[0]['Rol_idRol']==2)
                {
                    $this->smarty->assign('nav', 'Secretaria');
                    $this->smarty->assign('title','Secretaria');
                    $this->smarty->display('Secretaria.tpl');
                }
                else if ($arr[0]['Rol_idRol']==3)
                {
                    $this->smarty->assign('nav', 'Paciente');
                    $this->smarty->assign('title','Paciente');
                    $this->smarty->display('Paciente.tpl');
                }
                else if ($arr[0]['Rol_idRol']==4)
                {
                    $this->smarty->assign('title','Doctor');
                    $this->smarty->display('Nutricionista.tpl');
                }
                else if ($arr[0]['Rol_idRol']==5)
                {
                    $this->smarty->assign('title','Doctor');
                    $this->smarty->display('Pediatra.tpl');
                }
                else
                {
                    echo "no rol";
                }
            }

            else if($u->num_rows>1)
            {
                $this->smarty->assign('title', 'Home');
                $this->smarty->display('Home.tpl');
            }
            else
            {
                $this->smarty->assign('title','Home');
                $this->smarty->display('Home.tpl');
            }
        }
    }

?>