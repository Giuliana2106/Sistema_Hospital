<?php
    class DireccionesNav
    {
        public $smarty;
        public $secretaria;
        
        public function __construct()
        {
            $this->smarty=new Smarty();
            $this->secretaria=new Secretaria(); 
        }
        
        public function Registro()
        {
            $ad=$this->secretaria->VerRol();
            $arr=array();
            while($row=mysqli_fetch_assoc($ad))
            {
                array_push($arr,$row);
            }
            $this->smarty->assign('nav','secretaria');
            $this->smarty->assign('NombreRol',$arr);
            $this->smarty->assign('rol','registro');
            $this->smarty->assign('title','Secretaria');
            $this->smarty->display('Secretaria.tpl');
        }
        
        public function RegistroCitas()
        {
            $this->smarty->assign('nav','secretaria');
            $this->smarty->assign('rol','registrocitas');
            $this->smarty->assign('title','Secretaria');
            $this->smarty->display('Secretaria.tpl');
        }

        public function Vercitas()
        {
            $this->smarty->assign('nav','secretaria');
            $this->smarty->assign('rol','vercitas');
            $this->smarty->assign('title','Secretaria');
            $this->smarty->display('Secretaria.tpl');
        }

        public function VerRegistro()
        {
            $this->smarty->assign('nav','secretaria');
            $this->smarty->assign('rol','verregistro');
            $this->smarty->assign('title','Secretaria');
            $this->smarty->display('Secretaria.tpl');
        }

        public function CitasCardio()
        {
            $this->smarty->assign('nav','secretaria');
            $this->smarty->assign('rol','citascardio');
            $this->smarty->assign('title','Secretaria');
            $this->smarty->display('Secretaria.tpl');
        }

        public function CitasNutricio()
        {
            $this->smarty->assign('nav','secretaria');
            $this->smarty->assign('rol','citasnutricionista');
            $this->smarty->assign('title','Secretaria');
            $this->smarty->display('Secretaria.tpl');
        }

        public function CitasPediatra()
        {
            $this->smarty->assign('nav','secretaria');
            $this->smarty->assign('rol','citaspediatra');
            $this->smarty->assign('title','Secretaria');
            $this->smarty->display('Secretaria.tpl');
        }

    }
?>