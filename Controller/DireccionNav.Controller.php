<?php
    class DireccionNav
    {
        public $smarty;
        public $paciente;
        
        public function __construct()
        {
            $this->smarty=new Smarty();
            $this->paciente = new Pacientes();
        }

        public function Registro()
        {
            $this->smarty->assign('nav', 'paciente');
            $this->smarty->assign('rol','registro');
            $this->smarty->assign('title','Paciente');
            $this->smarty->display('Paciente.tpl');
        }

        public function VerCita()
        {
            $p=$this->paciente->VerCita($_SESSION['id_Usuario']);
            $array=array();
            while($row=mysqli_fetch_assoc($p))
            {
                array_push($array, $row);
            }
            $this->smarty->assign('paciente', $array);
            $this->smarty->assign('nav', 'paciente');
            $this->smarty->assign('rol','vercita');
            $this->smarty->assign('title','Paciente');
            $this->smarty->display('Paciente.tpl');
        }

    }
?>