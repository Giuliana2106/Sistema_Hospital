<?php
    class Paciente
    {
        public $smarty;
        public $pac;

        public function __construct()
        {
            $this->pac = new Pacientes();
            $this->smarty = new Smarty();
        }
        public function RegistroPaciente()
        {
            $edad = $_POST['edad'];
            $consulta = $_POST['Consulta'];
            $fecha = $_POST['fecha'];
            $DPI = $_POST['DPI']; 

            $x=$this->pac->Registro($edad, $consulta, $DPI, $fecha);
            $this->smarty->assign('nav', 'Paciente');
            $this->smarty->assign('title', 'Paciente');
            $this->smarty->display('Paciente.tpl');

        }

    }
?>