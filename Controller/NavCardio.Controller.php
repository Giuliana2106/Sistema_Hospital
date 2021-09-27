<?php
    class NavCardio
    {
        public $smarty;
        public $cardiologo;
        
        public function __construct()
        {
            $this->smarty=new Smarty();
        }

        public function VerCita()
        {
            $this->smarty->assign('nav', 'cardiologo');
            $this->smarty->assign('rol','vercita');
            $this->smarty->assign('title','Cardiologo');
            $this->smarty->display('Cardiologo.tpl');
        }

        public function Disponi()
        {
            $this->smarty->assign('nav', 'cardiologo');
            $this->smarty->assign('rol','disponibilidad');
            $this->smarty->assign('title','Cardiologo');
            $this->smarty->display('Cardiologo.tpl');
        }

    }