<?php
    class DireccionNav
    {
        public $smarty;
        public $paciente;

        public function __construct()
        {
            $this->smarty=new Smarty();
            $this->paciente=new Paciente();
        }

        public function Registro()
        {

            $this->smarty->assign('rol','registro');
            $this->smarty->assign('title','Paciente');
            $this->smarty->display('Paciente.tpl');
        }

    }
?>