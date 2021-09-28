<?php
/* Smarty version 3.1.39, created on 2021-09-28 23:50:19
  from 'C:\xampp\htdocs\Sistema_Hospital\templates\Navs\Navpac.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61538e1b6eb4c8_38210288',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d1615e1b1af0d679189e0b04a48c12e4fb2d112' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Sistema_Hospital\\templates\\Navs\\Navpac.tpl',
      1 => 1632848774,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61538e1b6eb4c8_38210288 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col s5">
    <nav class = "center-align cyan accent-4">Opciones</nav>
<div class="collection">
    <?php $_prefixVariable1 = 'Paciente';
$_smarty_tpl->_assignInScope('nav', $_prefixVariable1);
if ($_prefixVariable1) {?>
        <a href="?controller=DireccionNav&method=Registro" class="collection-item">Registro del paciente</a>
        <a href="?controller=DireccionNav&method=Vercita" class="collection-item">Citas</a>
        <a href="?controller=Home&method=Inicio" class="collection-item">Salir</a>
    <?php }?>
 </div>   
</div><?php }
}
