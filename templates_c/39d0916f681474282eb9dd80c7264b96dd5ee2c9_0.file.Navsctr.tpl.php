<?php
/* Smarty version 3.1.39, created on 2021-09-22 06:10:11
  from 'C:\xampp\htdocs\Sistema_Hospital\templates\Navs\Navsctr.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614aaca39594f8_47715672',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39d0916f681474282eb9dd80c7264b96dd5ee2c9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Sistema_Hospital\\templates\\Navs\\Navsctr.tpl',
      1 => 1632283757,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614aaca39594f8_47715672 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col s3">
    <nav class = "center-align cyan accent-4">Opciones</nav>
<div class="collection">

<?php $_prefixVariable1 = 'Secretaria';
$_smarty_tpl->_assignInScope('nav', $_prefixVariable1);
if ($_prefixVariable1) {?>
        <a href="?controller=DireccionNav&method=RegistroPaci" class="collection-item">Crear Registro</a>
        <a href="?controller=DireccionNav&method=VerRegistro" class="collection-item">Registro de pacientes</a>
        <a href="?controller=Home&method=Registro" class="collection-item">Salir</a>

    <?php }?>
 </div>   
</div>
<?php }
}
