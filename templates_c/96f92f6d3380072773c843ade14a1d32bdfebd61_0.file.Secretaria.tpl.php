<?php
/* Smarty version 3.1.39, created on 2021-09-29 23:20:08
  from 'C:\xampp\htdocs\Sistema_Hospital\templates\Secretaria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6154d8887fde55_90128543',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96f92f6d3380072773c843ade14a1d32bdfebd61' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Sistema_Hospital\\templates\\Secretaria.tpl',
      1 => 1632950395,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/Cabeceras/Header.tpl' => 1,
    'file:Navs/Navsc.tpl' => 1,
    'file:Secretaria/Registro.tpl' => 1,
    'file:Secretaria/RegistroCitas.tpl' => 1,
    'file:Secretaria/Vercitas.tpl' => 1,
    'file:Secretaria/VerRegistro.tpl' => 1,
    'file:Secretaria/CitasCardio.tpl' => 1,
    'file:Secretaria/CitasNutricio.tpl' => 1,
    'file:Secretaria/CitasPediatra.tpl' => 1,
    'file:templates/Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_6154d8887fde55_90128543 (Smarty_Internal_Template $_smarty_tpl) {
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
    <?php $_smarty_tpl->_subTemplateRender("file:Navs/Navsc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>

    <div class="col 1">
    </div>

    <div class="col s7">
    <h1>Secretaria</h1>
    <?php if ((isset($_smarty_tpl->tpl_vars['rol']->value))) {?>
        <?php if ($_smarty_tpl->tpl_vars['rol']->value == 'registro') {?>
          <?php $_smarty_tpl->_subTemplateRender('file:Secretaria/Registro.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          <?php } elseif ($_smarty_tpl->tpl_vars['rol']->value == 'registrocitas') {?>
            <?php $_smarty_tpl->_subTemplateRender('file:Secretaria/RegistroCitas.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
               <?php } elseif ($_smarty_tpl->tpl_vars['rol']->value == 'vercitas') {?>
                  <?php $_smarty_tpl->_subTemplateRender('file:Secretaria/Vercitas.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
                    <?php } elseif ($_smarty_tpl->tpl_vars['rol']->value == 'verregistro') {?>
                      <?php $_smarty_tpl->_subTemplateRender('file:Secretaria/VerRegistro.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
                        <?php } elseif ($_smarty_tpl->tpl_vars['rol']->value == 'citascardio') {?>
                          <?php $_smarty_tpl->_subTemplateRender('file:Secretaria/CitasCardio.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                           <?php } elseif ($_smarty_tpl->tpl_vars['rol']->value == 'citasnutricionista') {?>
                            <?php $_smarty_tpl->_subTemplateRender('file:Secretaria/CitasNutricio.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>    
                              <?php } elseif ($_smarty_tpl->tpl_vars['rol']->value == 'citaspediatra') {?>
                               <?php $_smarty_tpl->_subTemplateRender('file:Secretaria/CitasPediatra.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>
    <?php }?>
    </div>
</div>

</div>

<footer class="page-footer card  cyan accent-4  "><div class="card  cyan accent-4">
    <div class="container  ">
        <div class="row ">
        <div class="col l6 s12">
        <h5 class="white-text  "></h5>
        <p class="grey-text text-lighten-4"></p>
        </div>
        <div class="col l4 offset-l2 s12">
        <h5 class="white-text"></h5>
        <ul>
            <li><a class="grey-text text-lighten-3" href="#!"></a></li>
            <li><a class="grey-text text-lighten-3" href="#!"></a></li>
            <li><a class="grey-text text-lighten-3" href="#!"></a></li>
            <li><a class="grey-text text-lighten-3" href="#!"></a></li>
        </ul>
        </div>
        </div>
        </div>
        <div class="footer-copyright">
        <div class="container">
        © 2021 Copyright Health Center
        <a class="grey-text text-lighten-4 right" href="#!"></a>
    </div>
</footer>
</div> 
<?php $_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php }
}
