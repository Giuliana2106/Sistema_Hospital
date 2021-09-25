<?php
/* Smarty version 3.1.39, created on 2021-09-22 06:02:49
  from 'C:\xampp\htdocs\Sistema_Hospital\templates\Navs\Nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614aaae9d628b9_68096298',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e760cd8406ce6a1556204996f26c1c39dc9d8f1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Sistema_Hospital\\templates\\Navs\\Nav.tpl',
      1 => 1632283363,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614aaae9d628b9_68096298 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col s3">
    <nav class = "center-align cyan accent-4">Opciones</nav>
<div class="collection">
    <?php $_prefixVariable1 = 'Paciente';
$_smarty_tpl->_assignInScope('nav', $_prefixVariable1);
if ($_prefixVariable1) {?>
        <a href="?controller=DireccionNav&method=Registro" class="collection-item">Registro del paciente</a>
        <a href="?controller=DireccionNav&method=Vercita" class="collection-item">Citas</a>
        <a href="?controller=Home&method=Inicio" class="collection-item">Salir</a>
       
    <?php } else {
$_prefixVariable2 = 'Cardiologo';
$_smarty_tpl->_assignInScope('nav', $_prefixVariable2);
if ($_prefixVariable2) {?>
        <a href="?controller=DireccionNav&method=Cita" class="collection-item">Citas</a>
        <a href="?controller=DireccionNav&method=Disponi" class="collection-item">Disponibilidad</a>
        <a href="?controller=Home&method=Inicio" class="collection-item">Salir</a>

    <?php } else {
$_prefixVariable3 = 'Nutricionista';
$_smarty_tpl->_assignInScope('nav', $_prefixVariable3);
if ($_prefixVariable3) {?>
        <a href="?controller=DireccionNav&method=Cita" class="collection-item">Citas</a>
        <a href="?controller=DireccionNav&method=Disponi" class="collection-item">Disponibilidad</a>
        <a href="?controller=Home&method=Inicio" class="collection-item">Salir</a>

    <?php } else {
$_prefixVariable4 = 'Pediatra';
$_smarty_tpl->_assignInScope('nav', $_prefixVariable4);
if ($_prefixVariable4) {?>
        <a href="?controller=DireccionNav&method=Cita" class="collection-item">Citas</a>
        <a href="?controller=DireccionNav&method=Disponi" class="collection-item">Disponibilidad</a>
        <a href="?controller=Home&method=Inicio" class="collection-item">Salir</a>

    <?php } else {
$_prefixVariable5 = 'Secretaria';
$_smarty_tpl->_assignInScope('nav', $_prefixVariable5);
if ($_prefixVariable5) {?>
        <a href="?controller=DireccionNav&method=RegistroPaci" class="collection-item">Crear Registro</a>
        <a href="?controller=DireccionNav&method=VerRegistro" class="collection-item">Registro de pacientes</a>
        <a href="?controller=Home&method=Registro" class="collection-item">Salir</a>

    <?php }}}}}?>
 </div>   
</div>
<?php }
}
