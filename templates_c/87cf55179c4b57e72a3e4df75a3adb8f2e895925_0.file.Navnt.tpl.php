<?php
/* Smarty version 3.1.39, created on 2021-09-22 06:22:34
  from 'C:\xampp\htdocs\Sistema_Hospital\templates\Navs\Navnt.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614aaf8a338267_30959190',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87cf55179c4b57e72a3e4df75a3adb8f2e895925' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Sistema_Hospital\\templates\\Navs\\Navnt.tpl',
      1 => 1632284550,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614aaf8a338267_30959190 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col s5">
    <nav class = "center-align cyan accent-4">Opciones</nav>
<div class="collection">

<?php $_prefixVariable1 = 'Nutricionista';
$_smarty_tpl->_assignInScope('nav', $_prefixVariable1);
if ($_prefixVariable1) {?>
    <a href="?controller=DireccionNav&method=Cita" class="collection-item">Citas</a>
    <a href="?controller=DireccionNav&method=Disponi" class="collection-item">Disponibilidad</a>
    <a href="?controller=Home&method=Inicio" class="collection-item">Salir</a>

<?php }?>
</div>   
</div><?php }
}
