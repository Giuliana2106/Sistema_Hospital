<?php
/* Smarty version 3.1.39, created on 2021-08-27 17:41:14
  from 'C:\xampp\htdocs\Sistema_Hospital\templates\Navs\Nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6129079a9f9967_38567847',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e760cd8406ce6a1556204996f26c1c39dc9d8f1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Sistema_Hospital\\templates\\Navs\\Nav.tpl',
      1 => 1630078871,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6129079a9f9967_38567847 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col s3">
    <nav class = "center-align cyan accent-4">Opciones</nav>
<div class="collection">
    <?php $_prefixVariable1 = 'Paciente';
$_smarty_tpl->_assignInScope('nav', $_prefixVariable1);
if ($_prefixVariable1) {?>
        <a href="?controller=DireccionNav&method=Registro" class="collection-item">Registro del pacientes</a>
        <a href="?controller=DireccionNav&method=Vercita" class="collection-item">Citas</a>
        <a href="?controller=Home&method=Inicio" class="collection-item">Salir</a>
       
    <?php } else {
$_prefixVariable2 = 'Doctor';
$_smarty_tpl->_assignInScope('nav', $_prefixVariable2);
if ($_prefixVariable2) {?>
        <a href="?controller=DireccionNav&method=Registro" class="collection-item">Crear Registro</a>
        <a href="?controller=DireccionNav&method=Vercita" class="collection-item">Ver Cita</a>
        <a href="?controller=Home&method=Inicio" class="collection-item">Salir</a>

    <?php } else {
$_prefixVariable3 = 'Secretaria';
$_smarty_tpl->_assignInScope('nav', $_prefixVariable3);
if ($_prefixVariable3) {?>
        <a href="?" class="collection-item">Crear Registro</a>
        <a href="?controller=DireccionNav&method=Registro" class="collection-item">Registro de pacientes</a>
        <a href="?controller=DireccionNav&method=Registro" class="collection-item">Salir</a>

    <?php }}}?>
 </div>   
</div>
<?php }
}
