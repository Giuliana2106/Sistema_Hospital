<?php
/* Smarty version 3.1.39, created on 2021-09-22 06:24:18
  from 'C:\xampp\htdocs\Sistema_Hospital\templates\Navs\Navpdt.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614aaff214bb64_40586452',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e8c9d916009fc83d33fc50acb231c50c53dfb2c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Sistema_Hospital\\templates\\Navs\\Navpdt.tpl',
      1 => 1632284627,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614aaff214bb64_40586452 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col s5">
    <nav class = "center-align cyan accent-4">Opciones</nav>
<div class="collection">

<?php $_prefixVariable1 = 'Pediatra';
$_smarty_tpl->_assignInScope('nav', $_prefixVariable1);
if ($_prefixVariable1) {?>
    <a href="?controller=DireccionNav&method=Cita" class="collection-item">Citas</a>
    <a href="?controller=DireccionNav&method=Disponi" class="collection-item">Disponibilidad</a>
    <a href="?controller=Home&method=Inicio" class="collection-item">Salir</a>

<?php }?>
</div>   
</div><?php }
}
