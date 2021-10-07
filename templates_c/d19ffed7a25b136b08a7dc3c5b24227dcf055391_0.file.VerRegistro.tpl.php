<?php
/* Smarty version 3.1.39, created on 2021-09-29 20:58:48
  from 'C:\xampp\htdocs\Sistema_Hospital\templates\Secretaria\VerRegistro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6154b768b5a3b6_75041515',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd19ffed7a25b136b08a7dc3c5b24227dcf055391' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Sistema_Hospital\\templates\\Secretaria\\VerRegistro.tpl',
      1 => 1632941926,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/Cabeceras/header.tpl' => 1,
    'file:templates/Cabeceras/footer.tpl' => 1,
  ),
),false)) {
function content_6154b768b5a3b6_75041515 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>       

<div class="row">
    <div class="col s8 m6">
    <div class="card blue-grey darken-1">
    </div>
    </div>
</div>      
    <div class="row">
        <div class="input-field col s12">
            <h4 class="center-align black-text">Ver registro de los usuarios</h4>
        </div>
    </div>

    <div class="row">
        <div class="col s8">
            <table>
                <thead class="text_center">
                    <tr>
                        
                        <th>Nombre</th>
                        <th>Usuario</th>
                        <th>Password</th>
                        <th>Rol</th>
                    </tr>
                </thead>
                <tbody>
            <?php if ((isset($_smarty_tpl->tpl_vars['usuario']->value))) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuario']->value, 'secretaria');
$_smarty_tpl->tpl_vars['secretaria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['secretaria']->value) {
$_smarty_tpl->tpl_vars['secretaria']->do_else = false;
?>
                        <tr>
                            <td>
                                <?php echo $_smarty_tpl->tpl_vars['secretaria']->value['Nombre'];?>

                            </td>

                            <td>
                                 <?php echo $_smarty_tpl->tpl_vars['secretaria']->value['Usuario'];?>

                            </td>

                            <td>
                                 <?php echo $_smarty_tpl->tpl_vars['secretaria']->value['Pass'];?>

                            </td>

                            <td>
                                  <?php echo $_smarty_tpl->tpl_vars['secretaria']->value['Rol_idRol'];?>

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
