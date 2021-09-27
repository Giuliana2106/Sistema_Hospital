<?php
    class NavPediatra
    {
        public $smarty;
        public $Pediatra;
        
        public function __construct()
        {
            $this->smarty=new Smarty();
        }

        public function VerCita()
        {
            $this->smarty->assign('nav', 'pediatra');
            $this->smarty->assign('rol','vercita');
            $this->smarty->assign('title','Pediatra');
            $this->smarty->display('Pediatra.tpl');
        }

        public function Disponi()
        {
            $this->smarty->assign('nav', 'pediatra');
            $this->smarty->assign('rol','disponibilidad');
            $this->smarty->assign('title','Pediatra');
            $this->smarty->display('Pediatra.tpl');
        }

    }