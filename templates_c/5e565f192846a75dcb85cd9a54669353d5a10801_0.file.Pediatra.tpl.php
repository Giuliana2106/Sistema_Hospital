<?php
/* Smarty version 3.1.39, created on 2021-09-22 06:24:17
  from 'C:\xampp\htdocs\Sistema_Hospital\templates\Pediatra.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614aaff1d5e1b2_84941013',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e565f192846a75dcb85cd9a54669353d5a10801' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Sistema_Hospital\\templates\\Pediatra.tpl',
      1 => 1632284654,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/Cabeceras/Header.tpl' => 1,
    'file:Navs/Navpdt.tpl' => 1,
    'file:Pediatra/Citas.tpl' => 1,
    'file:Paciente/Disponibilidad.tpl' => 1,
    'file:templates/Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_614aaff1d5e1b2_84941013 (Smarty_Internal_Template $_smarty_tpl) {
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
        <?php $_smarty_tpl->_subTemplateRender("file:Navs/Navpdt.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>

        <div class="col 1">
        </div>

        <div class="col s5">
        <h1>Pediatra</h1>
        <?php if ((isset($_smarty_tpl->tpl_vars['rol']->value))) {?>
            <?php if ($_smarty_tpl->tpl_vars['rol']->value == 'citas') {?>
                <?php $_smarty_tpl->_subTemplateRender("file:Pediatra/Citas.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php } elseif ($_smarty_tpl->tpl_vars['rol']->value == 'disponibilidad') {?>
                    <?php $_smarty_tpl->_subTemplateRender('file:Paciente/Disponibilidad.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php }?>
        <?php }?>
        </div>
    </div>
<?php $_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php }
}
