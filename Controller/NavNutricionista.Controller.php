<?php
    class NavNutricionista
    {
        public $smarty;
        public $nutricionista;
        
        public function __construct()
        {
            $this->smarty=new Smarty();
        }

        public function VerCita()
        {
            $this->smarty->assign('nav', 'nutricionista');
            $this->smarty->assign('rol','vercita');
            $this->smarty->assign('title','Nutricionista');
            $this->smarty->display('Nutricionista.tpl');
        }

        public function Disponi()
        {
            $this->smarty->assign('nav', 'nutricionista');
            $this->smarty->assign('rol','disponibilidad');
            $this->smarty->assign('title','Nutricionista');
            $this->smarty->display('Nutricionista.tpl');
        }

    }