<?php
/* Smarty version 3.1.34-dev-7, created on 2021-11-18 20:27:46
  from 'C:\xampp\htdocs\tpe-web2\templates\formEditarUser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6196a9326b3d31_65018349',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '534118a7361522908ef265882c259a77cf63a050' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe-web2\\templates\\formEditarUser.tpl',
      1 => 1637263646,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6196a9326b3d31_65018349 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

   <h3>Cambiar permiso de usuario</h3>
    
    <form action="cambiarPermiso/<?php echo $_smarty_tpl->tpl_vars['idUsuario']->value;?>
" method="POST" >
    <label for="administrador">Administrador: </label>
        <input type="checkbox" name="administrador" id="administrador"><br>
        <button id="cambiar" type="submit" style="margin:10px 30px">Cambiar</button>
    </form>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
