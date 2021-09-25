<?php
    class DireccionNav
    {
        public $smarty;
        public $paciente;
        
        public function __construct()
        {
            $this->smarty=new Smarty();
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
            $this->smarty->assign('nav', 'paciente');
            $this->smarty->assign('rol','vercita');
            $this->smarty->assign('title','Paciente');
            $this->smarty->display('Paciente.tpl');
        }

    }
?>