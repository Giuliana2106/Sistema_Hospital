<<<<<<< HEAD
<?php
require_once('Autoload.php');

if (isset($_GET['controller']) && isset($_GET['method']))
{
    $controller=$_GET['controller'];
    $method=$_GET['method'];
}
else
{
    $controller="Home";
    $method="Inicio";
}
if(class_exists($controller) && method_exists($controller, $method))
{
    $class = new $controller();
    $class->$method();
}
else
{
    echo "clase no existe o el metodo es incorrecto";
}
?>
=======
<?php
require_once('Autoload.php');

if (isset($_GET['controller']) && isset($_GET['method']))
{
    $controller=$_GET['controller'];
    $method=$_GET['method'];
}
else
{
    $controller="Home";
    $method="Inicio";
}
if(class_exists($controller) && method_exists($controller, $method))
{
    $class = new $controller();
    $class->$method();
}
else
{
    echo "clase no existe o el metodo es incorrecto";
}
?>
>>>>>>> 5e6ae1fc2770772ac02d3ac5a993e9a9bad8e63c
