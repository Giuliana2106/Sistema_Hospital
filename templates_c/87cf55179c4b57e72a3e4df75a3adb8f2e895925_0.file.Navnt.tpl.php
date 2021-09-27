<?php
/* Smarty version 3.1.39, created on 2021-09-27 19:57:47
  from 'C:\xampp\htdocs\Sistema_Hospital\templates\Navs\Navnt.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6152061b05a2e5_24381053',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87cf55179c4b57e72a3e4df75a3adb8f2e895925' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Sistema_Hospital\\templates\\Navs\\Navnt.tpl',
      1 => 1632765370,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6152061b05a2e5_24381053 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col s5">
    <nav class = "center-align cyan accent-4">Opciones</nav>
<div class="collection">

<?php $_prefixVariable1 = 'Nutricionista';
$_smarty_tpl->_assignInScope('nav', $_prefixVariable1);
if ($_prefixVariable1) {?>
    <a href="?controller=NavNutricionista&method=Cita" class="collection-item">Citas</a>
    <a href="?controller=NavNutricionista&method=Disponi" class="collection-item">Disponibilidad</a>
    <a href="?controller=Home&method=Inicio" class="collection-item">Salir</a>

<?php }?>
</div>   
</div><?php }
}
