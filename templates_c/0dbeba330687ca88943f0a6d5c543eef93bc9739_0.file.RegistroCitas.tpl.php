<?php
/* Smarty version 3.1.39, created on 2021-09-29 18:50:55
  from 'C:\xampp\htdocs\Sistema_Hospital\templates\Secretaria\RegistroCitas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6154996f8d3e33_44913751',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0dbeba330687ca88943f0a6d5c543eef93bc9739' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Sistema_Hospital\\templates\\Secretaria\\RegistroCitas.tpl',
      1 => 1632934247,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/Cabeceras/Header.tpl' => 1,
    'file:templates/Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_6154996f8d3e33_44913751 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="card-panel cyan accent-1">         
      
      <div class="row" >
          <div class="col s12 m6">
          <div class="card blue-grey darken-1">
          </div>
          </div>
      </div>      
     

<div class="row" align="center">
<h4>Registrar citas</h4>
    <div class="col s12">
        <form method="post" action="?controller=Secretaria&method=RegistroCitas" class="s8">
        
        <div class="input-field col s12">
        <input id="iduser" type="text" class="validate" required="" name="Usuario_idUsuario"/>
        <label for="iduser">User_idUser</label>
        </div>

        <div class="input-field col s12">
        <input id="Consulta" type="text" class="validate" required="" name="Consulta"/>
        <label for="Consulta">Consulta</label>
        </div>   

        <div class="input-field col s12">
        <input id="Edad" type="number" class="validate" required="" name="Edad"/>
        <label for="Edad">Edad</label>
        </div> 
            
        <div class="input-field col s12">
        <input id="Fecha" type="date" class="validate" required="" name="Fecha"/>
        <label for="Fecha">Fecha de consulta</label>
        </div> 

            
        <div class="row">
            <div class="input-field col s12 center-align">
            <input class="waves-effect waves-light btn" type="submit"value="Guardar Registro"/>
            </div>
        </div>
        </form>
    </div>
</div>
</div> 
<?php $_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
