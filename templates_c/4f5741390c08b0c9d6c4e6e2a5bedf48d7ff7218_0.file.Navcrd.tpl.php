<?php
/* Smarty version 3.1.39, created on 2021-09-25 04:57:35
  from 'C:\xampp\htdocs\Sistema_Hospital\templates\Navs\Navcrd.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614e901fe601b8_42505867',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f5741390c08b0c9d6c4e6e2a5bedf48d7ff7218' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Sistema_Hospital\\templates\\Navs\\Navcrd.tpl',
      1 => 1632538340,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614e901fe601b8_42505867 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col s5">
    <nav class = "center-align cyan accent-4">Opciones</nav>
<div class="collection">

<?php $_prefixVariable1 = 'Cardiologo';
$_smarty_tpl->_assignInScope('nav', $_prefixVariable1);
if ($_prefixVariable1) {?>
    <a href="?controller=NavCardio&method=Citas" class="collection-item">Citas</a>
    <a href="?controller=Home&method=Inicio" class="collection-item">Salir</a>
<?php }?>
</div>   
</div>
<?php }
}
