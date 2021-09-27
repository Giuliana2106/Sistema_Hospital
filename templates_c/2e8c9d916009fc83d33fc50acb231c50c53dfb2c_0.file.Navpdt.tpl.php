<?php
/* Smarty version 3.1.39, created on 2021-09-27 20:01:04
  from 'C:\xampp\htdocs\Sistema_Hospital\templates\Navs\Navpdt.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615206e0d2fe23_24220411',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e8c9d916009fc83d33fc50acb231c50c53dfb2c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Sistema_Hospital\\templates\\Navs\\Navpdt.tpl',
      1 => 1632765595,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615206e0d2fe23_24220411 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col s5">
    <nav class = "center-align cyan accent-4">Opciones</nav>
<div class="collection">

<?php $_prefixVariable1 = 'Pediatra';
$_smarty_tpl->_assignInScope('nav', $_prefixVariable1);
if ($_prefixVariable1) {?>
    <a href="?controller=NavPediatra&method=Cita" class="collection-item">Citas</a>
    <a href="?controller=NavPediatra&method=Disponi" class="collection-item">Disponibilidad</a>
    <a href="?controller=Home&method=Inicio" class="collection-item">Salir</a>

<?php }?>
</div>   
</div><?php }
}
