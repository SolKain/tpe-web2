<?php
/* Smarty version 3.1.34-dev-7, created on 2021-11-21 20:30:22
  from 'C:\xampp\htdocs\tpe-web2\templates\formEditarMoto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_619a9e4e8678a5_63789366',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c10a4c1ef375cf60f4b8616ed4b4bfb89dfa870d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe-web2\\templates\\formEditarMoto.tpl',
      1 => 1637176490,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_619a9e4e8678a5_63789366 (Smarty_Internal_Template $_smarty_tpl) {
?> <?php $_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
     <?php if ($_smarty_tpl->tpl_vars['isLoggedIn']->value) {?>
    <form action="edit/<?php echo $_smarty_tpl->tpl_vars['idMoto']->value;?>
" method="POST" class="formTabla" id="formTabla" enctype="multipart/form-data">
          <label for="">Ingresar color:</label> <input type="text" name="color" id="inputColor" placeholder="Blanco">
          <label for="">Ingresar cilindrada:</label> <input type="text" name="cilindrada" id="inputCilindrada" placeholder="150">
          <label for="">Ingresar tanque:</label> <input type="text" name="tanque" id="inputTanque" placeholder="10">
          <label for="">Ingresar tipo:</label><input type="text" name="id_tipo_moto" id="inputTipoMoto" placeholder="1">
          <div >
            <button type="submit" id="">Editar</button>
          </div> 
        </form>
<?php }
$_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
