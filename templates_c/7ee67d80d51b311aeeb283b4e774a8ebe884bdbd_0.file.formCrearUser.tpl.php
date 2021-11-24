<?php
/* Smarty version 3.1.34-dev-7, created on 2021-10-13 23:51:58
  from 'C:\xampp\htdocs\tpe-web2\templates\formCrearUser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_616754fee83ce4_34104265',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ee67d80d51b311aeeb283b4e774a8ebe884bdbd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe-web2\\templates\\formCrearUser.tpl',
      1 => 1634161175,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_616754fee83ce4_34104265 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2>Registrate:</h2>
<form action="registrar" method="POST">
    <input type="text" name="usuario" id="id" placeholder="Ingrese su usuario" required>
    <input type="password" name="contrasenia" id="password" placeholder="Ingrese su contraseña" required>
    <button type="submit" id="">Aceptar</button>
</form>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
