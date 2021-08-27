<?php
/* Smarty version 3.1.39, created on 2021-08-27 19:46:03
  from 'C:\xampp\htdocs\Sistema_Hospital\templates\Paciente.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612924dbf15167_58232081',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8ffa00426b4f426884ea767a2b210c495569f72' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Sistema_Hospital\\templates\\Paciente.tpl',
      1 => 1630086362,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Templates/Cabeceras/Header.tpl' => 1,
    'file:Navs/Nav.tpl' => 1,
    'file:Paciente/Registro.tpl' => 1,
    'file:Paciente/Vercita.tpl' => 1,
    'file:Templates/Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_612924dbf15167_58232081 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Templates/Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
        <?php $_smarty_tpl->_subTemplateRender("file:Navs/Nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>

        <div class="col 1">
        </div>

        <div class="col s5">
        <h1>Paciente</h1>
        <?php if ((isset($_smarty_tpl->tpl_vars['rol']->value))) {?>
            <?php if ($_smarty_tpl->tpl_vars['rol']->value == 'registro') {?>
                <?php $_smarty_tpl->_subTemplateRender('file:Paciente/Registro.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php } elseif ($_smarty_tpl->tpl_vars['rol']->value == 'vercita') {?>
                    <?php $_smarty_tpl->_subTemplateRender('file:Paciente/Vercita.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php }?>
        <?php }?>
        </div>
    </div>
<?php $_smarty_tpl->_subTemplateRender("file:Templates/Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php }
}
