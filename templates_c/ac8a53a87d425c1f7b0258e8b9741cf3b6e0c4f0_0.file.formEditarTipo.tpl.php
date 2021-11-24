<?php
/* Smarty version 3.1.34-dev-7, created on 2021-11-24 23:32:47
  from 'C:\xampp\htdocs\tpe-web2\templates\formEditarTipo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_619ebd8fb980d6_79122086',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac8a53a87d425c1f7b0258e8b9741cf3b6e0c4f0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe-web2\\templates\\formEditarTipo.tpl',
      1 => 1637793134,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_619ebd8fb980d6_79122086 (Smarty_Internal_Template $_smarty_tpl) {
?> <?php $_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php if ($_smarty_tpl->tpl_vars['isLoggedIn']->value) {?>
<form action="editTipo/<?php echo $_smarty_tpl->tpl_vars['idTipo']->value;?>
" method="POST" class="formTabla" id="formTablaTipo" enctype="multipart/form-data">
<label for="">Ingresar terreno:</label> <input type="text" name="terreno" id="inputTerreno" placeholder="Arena">
    <div >
    <button type="submit" id="">Editar</button>
    </div> 
</form>

</div>
    <h4 class= error>  <?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h4>
</div>
<?php }?>
 <?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
