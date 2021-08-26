<<<<<<< HEAD
<?php
    class Home
    {
        public $smarty;
        public $con;
        public function __construct()
        {
            $this->smarty=new Smarty();
            $this->con=new Conexion();
        }

        public function Inicio()
        {
            $this->smarty->display('Home.tpl');
        }
    }
=======
<?php
    class Home
    {
        public $smarty;
        public $con;
        public function __construct()
        {
            $this->smarty=new Smarty();
            $this->con=new Conexion();
        }

        public function Inicio()
        {
            $this->smarty->display('Home.tpl');
        }
    }
>>>>>>> 5e6ae1fc2770772ac02d3ac5a993e9a9bad8e63c
?>