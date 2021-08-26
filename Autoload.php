<<<<<<< HEAD
<?php

function Autoload($class)
{
    if (is_file('Controller/'.$class.'.Controller.php'))
    {
        include('Controller/'.$class.'.Controller.php');
    }
    else if (is_file('Model/'.$class.'.Model.php'))
    {
        include('Model/'.$class.'.Model.php');
    }
    else if (is_file('Framework/Smarty/'.$class.'.class.php'))
    {
        include('Framework/Smarty/'.$class.'.class.php');
    }
}

spl_autoload_register('Autoload');
=======
<?php

function Autoload($class)
{
    if (is_file('Controller/'.$class.'.Controller.php'))
    {
        include('Controller/'.$class.'.Controller.php');
    }
    else if (is_file('Model/'.$class.'.Model.php'))
    {
        include('Model/'.$class.'.Model.php');
    }
    else if (is_file('Framework/Smarty/'.$class.'.class.php'))
    {
        include('Framework/Smarty/'.$class.'.class.php');
    }
}

spl_autoload_register('Autoload');
>>>>>>> 5e6ae1fc2770772ac02d3ac5a993e9a9bad8e63c
?>