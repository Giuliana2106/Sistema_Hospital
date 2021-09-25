<?php
/* Smarty version 3.1.39, created on 2021-09-24 07:45:46
  from 'C:\xampp\htdocs\Sistema_Hospital\templates\Cabeceras\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614d660aec0e13_51737377',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c01f327ffa395f38f2579d02edfeaea2fc8d1da' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Sistema_Hospital\\templates\\Cabeceras\\header.tpl',
      1 => 1629939152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614d660aec0e13_51737377 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="Framework/Materialize/css/materialize.min.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>
      <?php if ((isset($_smarty_tpl->tpl_vars['title']->value))) {?>
        <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

      <?php } else { ?>
        Inicio de Sesión
      <?php }?>
      </title>
    </head>

    <body> 
<?php }
}
