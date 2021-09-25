<?php
/* Smarty version 3.1.39, created on 2021-09-24 05:16:17
  from 'C:\xampp\htdocs\Sistema_Hospital\templates\Paciente\Vercita.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614d43019cd510_08516987',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d2bf0a468879c35288755519a446e0087e7689f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Sistema_Hospital\\templates\\Paciente\\Vercita.tpl',
      1 => 1632453374,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/Cabeceras/Header.tpl' => 1,
    'file:templates/Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_614d43019cd510_08516987 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="row">

<div class="row">
    <div class="input-field col s12">
        <table>
            <thead>
                <tr>
                    <th>Edad</th>
                    <th>Consulta</th>
                    <th>DPI o No. de Seguro</th>
                    <th>Fecha de Consulta</th>
                </tr>          
            </thead>
            <tbody>
            <?php if ((isset($_smarty_tpl->tpl_vars['paciente']->value))) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['paciente']->value, 'pac');
$_smarty_tpl->tpl_vars['pac']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pac']->value) {
$_smarty_tpl->tpl_vars['pac']->do_else = false;
?> 
                <tr>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['pac']->value['Edad'];?>

                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['pac']->value['Consulta'];?>

                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['pac']->value['Fecha'];?>

                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['pac']->value['DPI o No.Seguro'];?>

                    </td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
            </tbody>
        </table>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
