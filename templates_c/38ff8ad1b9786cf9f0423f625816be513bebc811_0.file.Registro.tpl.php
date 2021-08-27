<?php
/* Smarty version 3.1.39, created on 2021-08-27 20:00:38
  from 'C:\xampp\htdocs\Sistema_Hospital\templates\Paciente\Registro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612928466ed749_04203557',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38ff8ad1b9786cf9f0423f625816be513bebc811' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Sistema_Hospital\\templates\\Paciente\\Registro.tpl',
      1 => 1630087226,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/Cabeceras/Header.tpl' => 1,
    'file:templates/Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_612928466ed749_04203557 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="card-panel cyan accent-1">         
      
      <div class="row">
          <div class="col s12 m6">
          <div class="card blue-grey darken-1">
          </div>
          </div>
      </div>      
     

<div class="row">

    <div class="col s8">
        <form method="post" action="?class=Inventario$method=IngresoInventario">
            <div class="input-field col s8">
             <input id="nombre" type="text" name="nombre"/>
             <label for="nombre">Nombre del paciente</label>
            </div>

            <div class="input-field col s8">
            <input id="nombre" type="text" name="Consulta"/>
            <label for="nombre">Consulta</label>
           </div>


            <div class="input-field col s8">
                 <input id="edad" type="number" name="edad"/>
                 <label for="edad">Edad</label>
            </div>

            <div class="input-field col s8">
            <input id="cantidad" type="number" name="DPI"/>
            <label for="DPI">DPI o No. de Seguro</label>
            </div>
            

             <div class="input-field col s8">
                 <input id="fecha" type="date" name="fecha"/>
                  <label for="fecha">Fecha de Consulta</label>
               </div>
             

            <div class="row">
                    <div class="input-field col s8 center-align">
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
