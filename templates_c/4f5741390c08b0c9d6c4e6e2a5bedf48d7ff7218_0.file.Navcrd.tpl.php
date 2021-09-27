<?php
/* Smarty version 3.1.39, created on 2021-09-27 19:45:13
  from 'C:\xampp\htdocs\Sistema_Hospital\templates\Navs\Navcrd.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615203297678a6_86656996',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f5741390c08b0c9d6c4e6e2a5bedf48d7ff7218' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Sistema_Hospital\\templates\\Navs\\Navcrd.tpl',
      1 => 1632764709,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615203297678a6_86656996 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col s5">
    <nav class = "center-align cyan accent-4">Opciones</nav>
<div class="collection">

<?php $_prefixVariable1 = 'Cardiologo';
$_smarty_tpl->_assignInScope('nav', $_prefixVariable1);
if ($_prefixVariable1) {?>
    <a href="?controller=NavCardio&method=Citas" class="collection-item">Citas</a>
    <a href="?controller=NavCardio&method=Disponi" class="collection-item">Disponibilidad</a>
    <a href="?controller=Home&method=Inicio" class="collection-item">Salir</a>
<?php }?>
</div>   
</div>
<?php }
}
