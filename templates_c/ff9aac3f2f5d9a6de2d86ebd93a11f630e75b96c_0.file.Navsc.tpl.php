<?php
/* Smarty version 3.1.39, created on 2021-09-25 04:10:03
  from 'C:\xampp\htdocs\Sistema_Hospital\templates\Navs\Navsc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614e84fb19d457_13197994',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff9aac3f2f5d9a6de2d86ebd93a11f630e75b96c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Sistema_Hospital\\templates\\Navs\\Navsc.tpl',
      1 => 1632535791,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614e84fb19d457_13197994 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col s3">
    <nav class = "center-align cyan accent-4">Opciones</nav>
<div class="collection">

<?php $_prefixVariable1 = 'Secretaria';
$_smarty_tpl->_assignInScope('nav', $_prefixVariable1);
if ($_prefixVariable1) {?>
        <a href="?controller=DireccionesNav&method=Registro" class="collection-item">Registrar paciente</a>
        <a href="?controller=DireccionesNav&method=VerRegistro" class="collection-item">Ver registros de pacientes</a>
        <a href="?controller=DireccionesNav&method=RegistroCitas" class="collection-item">Registrar citas</a>
        <a href="?controller=DireccionesNav&method=Vercitas" class="collection-item">Ver Citas registradas</a>
        <a href="?controller=DireccionesNav&method=CitasCardio" class="collection-item">Ver citas del Cardiologo</a>
        <a href="?controller=DireccionesNav&method=CitasNutricio" class="collection-item">Ver citas de la Nutricionista</a>
        <a href="?controller=DireccionesNav&method=CitasPediatra" class="collection-item">Ver citas del Pediatra</a>
        <a href="?controller=Home&method=Inicio" class="collection-item">Salir</a>

    <?php }?>
 </div>   
</div>
<?php }
}
