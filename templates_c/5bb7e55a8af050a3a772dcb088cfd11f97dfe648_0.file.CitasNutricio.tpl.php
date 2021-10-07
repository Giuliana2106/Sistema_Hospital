<?php
/* Smarty version 3.1.39, created on 2021-09-29 04:34:05
  from 'C:\xampp\htdocs\Sistema_Hospital\templates\Secretaria\CitasNutricio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6153d09d668377_82157973',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5bb7e55a8af050a3a772dcb088cfd11f97dfe648' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Sistema_Hospital\\templates\\Secretaria\\CitasNutricio.tpl',
      1 => 1632882228,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/Cabeceras/header.tpl' => 1,
    'file:templates/Cabeceras/footer.tpl' => 1,
  ),
),false)) {
function content_6153d09d668377_82157973 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="card-panel cyan accent-1">         

<div class="row">
    <div class="col s12 m6">
    <div class="card blue-grey darken-1">
    </div>
    </div>
</div>      
    <div class="row">
        <div class="input-field col s12">
            <h4 class="center-align black-text">Ver Citas de Nutricionista</h4>
        </div>
    </div>

    <div class="row">
        <div class="col s12">
            <table>
                <thead>
                    <tr>
                        <th>Usuario_idUsuario</th>
                        <th>Consulta</th>
                        <th>Edad</th>
                        <th>Fecha de Consulta</th>
                        <th>Hora de la Consulta</th>

                    </tr>
                </thead>
                <tbody>
            <?php if ((isset($_smarty_tpl->tpl_vars['secretaria']->value))) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['secretaria']->value, 'secre');
$_smarty_tpl->tpl_vars['secre']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['secre']->value) {
$_smarty_tpl->tpl_vars['secre']->do_else = false;
?>
                        <tr>
                             <td>
                                <?php echo $_smarty_tpl->tpl_vars['secre']->value['Usuario_idUsuario'];?>

                            </td>

                            <td>
                                <?php echo $_smarty_tpl->tpl_vars['secre']->value['consulta'];?>

                            </td>

                            <td>
                                 <?php echo $_smarty_tpl->tpl_vars['secre']->value['edad'];?>

                            </td>

                            <td>
                                 <?php echo $_smarty_tpl->tpl_vars['secre']->value['fecha'];?>

                            </td>

                            <td>
                                  <?php echo $_smarty_tpl->tpl_vars['secre']->value['hora'];?>

                            </td>    
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php ob_start();
}
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
        
                </tbody>
            </table>
        </div>
    </div>
    
</div>
<?php $_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
