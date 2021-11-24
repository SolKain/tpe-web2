<?php
/* Smarty version 3.1.34-dev-7, created on 2021-10-12 23:23:18
  from 'C:\xampp\htdocs\tpe-web2\templates\formEditarTipo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6165fcc6c85c29_69043415',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac8a53a87d425c1f7b0258e8b9741cf3b6e0c4f0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe-web2\\templates\\formEditarTipo.tpl',
      1 => 1634073733,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6165fcc6c85c29_69043415 (Smarty_Internal_Template $_smarty_tpl) {
?> <?php $_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form action="editTipo/<?php echo $_smarty_tpl->tpl_vars['idTipo']->value;?>
" method="POST" class="formTabla" id="formTablaTipo" enctype="multipart/form-data">
<label for="">Ingresar terreno:</label> <input type="text" name="terreno" id="inputTerreno" placeholder="Arena">
    <div >
    <button type="submit" id="">Editar</button>
    </div> 
</form>

 <?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
