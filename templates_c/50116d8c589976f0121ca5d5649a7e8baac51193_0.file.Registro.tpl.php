<?php
/* Smarty version 3.1.39, created on 2021-09-29 00:38:50
  from 'C:\xampp\htdocs\Sistema_Hospital\templates\Secretaria\Registro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6153997a1be834_74011486',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50116d8c589976f0121ca5d5649a7e8baac51193' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Sistema_Hospital\\templates\\Secretaria\\Registro.tpl',
      1 => 1632868726,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/Cabeceras/Header.tpl' => 1,
    'file:templates/Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_6153997a1be834_74011486 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="card-panel cyan accent-1">         
      
      <div class="row" align="left">
          <div class="col s12 m6">
          <div class="card blue-grey darken-1">
          </div>
          </div>
      </div>      
     

<div class="row" align="center">
<h4>Registro de usuarios</h4>
    <div class="col s12">
        <form method="post" action="?controller=Secretaria&method=Registro">
        

        <div class="input-field col s12">
        <input id="Nombre" type="text" class="validate" required="" name="nombre"/>
        <label for="Nombre">Nombre</label>
        </div>   

        <div class="input-field col s12">
        <input id="User" type="text" class="validate" required="" name="user"/>
        <label for="User">Usuario</label>
        </div>  

        <div class="input-field col s12">
        <input id="Password" type="password" class="validate" required="" name="pass"/>
        <label for="Password">Password</label>
        </div> 

        <div class="row">
        <div class="input-field col s8">
        <label for="rol">Rol</label></nav><br></br>
        <select class="browser-default" name="rol">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['NombreRol']->value, 'nr');
$_smarty_tpl->tpl_vars['nr']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['nr']->value) {
$_smarty_tpl->tpl_vars['nr']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['nr']->value['idRol'];?>
"><?php echo $_smarty_tpl->tpl_vars['nr']->value['Nombre'];?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>
    </div>

        <div class="row">
            <div class="input-field col s12">
            <input class="btn waves-effect waves-light" type="submit" name="action"/>
            </div>
        </div>
        </form>
    </div>
</div>
</div> 
<?php $_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
