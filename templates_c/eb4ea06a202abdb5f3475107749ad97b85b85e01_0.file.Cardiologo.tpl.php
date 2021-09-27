<?php
/* Smarty version 3.1.39, created on 2021-09-27 19:43:34
  from 'C:\xampp\htdocs\Sistema_Hospital\templates\Cardiologo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615202c5f38f23_87759587',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb4ea06a202abdb5f3475107749ad97b85b85e01' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Sistema_Hospital\\templates\\Cardiologo.tpl',
      1 => 1632764608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/Cabeceras/Header.tpl' => 1,
    'file:Navs/Navcrd.tpl' => 1,
    'file:Cardiologo/Citas.tpl' => 1,
    'file:Cardiologo/Dispo.tpl' => 1,
    'file:templates/Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_615202c5f38f23_87759587 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="row">
<div class="navbar-fixed">
  <nav>
    <nav class=" cyan accent-4">
      <a href="" class="brand-logo">🍏Health Center </a>
    </nav>
  </nav>
  </div>
  <br></br>
    <div class="col s5">
    <?php $_smarty_tpl->_subTemplateRender("file:Navs/Navcrd.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>

    <div class="col 1">
    </div>

    <div class="col s5">
    <h1>Cardiólogo</h1>
    <?php if ((isset($_smarty_tpl->tpl_vars['rol']->value))) {?>
        <?php if ($_smarty_tpl->tpl_vars['rol']->value == 'citas') {?>
            <?php $_smarty_tpl->_subTemplateRender('file:Cardiologo/Citas.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php if ($_smarty_tpl->tpl_vars['rol']->value == 'disponibilidad') {?>
              <?php $_smarty_tpl->_subTemplateRender('file:Cardiologo/Dispo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
              <?php }?>
        <?php }?>
    <?php }?>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php }
}
