<?php
    class DireccionesNav
    {
        public $smarty;
        public $secretarias;
        
        public function __construct()
        {
            $this->smarty=new Smarty();
            $this->secretarias=new Secretary(); 
        }
        
        public function Registro()
        {
            $ad=$this->secretarias->VerRol();
            $arr=array();
            while($row=mysqli_fetch_assoc($ad))
            {
                array_push($arr,$row);
            }

            $this->smarty->assign('nav',"secretarias");
            $this->smarty->assign('NombreRol',$arr);
            $this->smarty->assign('rol','registro');
            $this->smarty->assign('title','Secretaria');
            $this->smarty->display('Secretaria.tpl');
        }
        
        public function RegistroCitas()
        {
            $this->smarty->assign('nav','secretarias');
            $this->smarty->assign('rol','registrocitas');
            $this->smarty->assign('title','Secretaria');
            $this->smarty->display('Secretaria.tpl');
        }

        public function Vercitas()
        {
            $ci=$this->secretarias->Vercitas($_SESSION[]);
            $array=array();
            while($row=mysqli_fetch_assoc($ci))
            {
                array_push($array, $row);
            }
            $this->smarty->assign('secretarias', $array);
            $this->smarty->assign('nav','secretarias');
            $this->smarty->assign('rol','vercitas');
            $this->smarty->assign('title','Secretaria');
            $this->smarty->display('Secretaria.tpl');
        }

        public function VerRegistros()
        {

            $r=$this->secretarias->VerRegistros($_SESSION[]);
            $array=array();
            while($row=mysqli_fetch_assoc($r))
            {
                array_push($array, $row);
            }
            $this->smarty->assign('secretarias', $array);
            $this->smarty->assign('nav','secretarias');
            $this->smarty->assign('rol','verregistro');
            $this->smarty->assign('title','Secretaria');
            $this->smarty->display('Secretaria.tpl');
            
        }

        public function CitasCardio()
        {
            $c=$this->secretarias->CitasCardio($_SESSION[]);
            $array=array();
            while($row=mysqli_fetch_assoc($c))
            {
                array_push($array, $row);
            }
            $this->smarty->assign('secretarias', $array);


            $this->smarty->assign('nav','secretaria');
            $this->smarty->assign('rol','citascardio');
            $this->smarty->assign('title','Secretaria');
            $this->smarty->display('Secretaria.tpl');
        }

        public function CitasNutricio()
        {

            $nu=$this->secretarias->CitasNutricio($_SESSION[]);
            $array=array();
            while($row=mysqli_fetch_assoc($nu))
            {
                array_push($array, $row);
            }
            $this->smarty->assign('secretarias', $array);
            $this->smarty->assign('nav','secretaria');
            $this->smarty->assign('rol','citasnutricionista');
            $this->smarty->assign('title','Secretaria');
            $this->smarty->display('Secretaria.tpl');
        }

        public function CitasPediatra()
        {
            $pe=$this->secretarias->VerCita($_SESSION[]);
            $array=array();
            while($row=mysqli_fetch_assoc($pe))
            {
                array_push($array, $row);
            }
            $this->smarty->assign('secretarias', $array);
            $this->smarty->assign('nav','secretaria');
            $this->smarty->assign('rol','citaspediatra');
            $this->smarty->assign('title','Secretaria');
            $this->smarty->display('Secretaria.tpl');
        }

    }
?>