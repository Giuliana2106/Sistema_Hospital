<?php
/* Smarty version 3.1.39, created on 2021-09-28 23:50:05
  from 'C:\xampp\htdocs\Sistema_Hospital\templates\Home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61538e0d0d5fa7_84259921',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ea2385190ea1432f0209af8b90cb2ce3044aabe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Sistema_Hospital\\templates\\Home.tpl',
      1 => 1632850866,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/Cabeceras/Header.tpl' => 1,
    'file:templates/Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_61538e0d0d5fa7_84259921 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="navbar-fixed">
      <nav>
        <nav class=" cyan accent-4">
          <a href="" class="brand-logo">🍏Health Center </a>

          <ul class="right hide-on-med-and-down">
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
          </ul>
        </nav>
      </nav>
    </div>

<div class="card-panel cyan accent-3">         
    <div class="container">
    <div class="row">
        <div class="col s12 m6">
        <div class="card blue-grey darken-1">
        </div>
        </div>
    </div>      
    <div>
        <h1 class="center-align white-text text- ">Bienvenidos</h1>

        <h5 class="center-align white-text text- ">Ingresa los siguientes datos</h5>
    </div>

            <form method="post" action="?controller=User&method=BuscarUsuario" class="col s4">
             <div class="row">
                <div class="input-field col s6">
                <input id="user" type="text" class="validate" required="" name="user">
                <label for="user">Usuario</label>
                </div>
     
     
                <div class="input-field col s6">
                <input id="password" type="password" class="validate" required="" name="pass">
                <label for="password">Password</label>
                </div>
             </div>   

              <div align="center">
                <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
                <i class="material-icons right">send</i>
                </button>
             </div>
             </form>

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
?> 
<?php }
}
