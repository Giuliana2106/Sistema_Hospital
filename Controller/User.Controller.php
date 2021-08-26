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

            if($u->num_rows==1)
            {
                $arr=array();
                while ($fila=mysqli_fetch_assoc($u))
                {
                    array_push($arr,$fila);
                }
                if ($arr[0]['Rol_idRol']==1)
                {
                    echo "Doctor";
                }
                else if ($arr[0]['Rol_idRol']==2)
                {
                   echo "Secretaria";
                }
                else if ($arr[0]['Rol_idRol']==3)
                {
                    echo "Paciente";
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