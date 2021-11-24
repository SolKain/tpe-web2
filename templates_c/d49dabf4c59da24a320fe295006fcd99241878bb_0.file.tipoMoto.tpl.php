<?php
/* Smarty version 3.1.34-dev-7, created on 2021-10-12 23:15:37
  from 'C:\xampp\htdocs\tpe-web2\templates\tipoMoto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6165faf9ef94c4_86856112',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd49dabf4c59da24a320fe295006fcd99241878bb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe-web2\\templates\\tipoMoto.tpl',
      1 => 1634073336,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6165faf9ef94c4_86856112 (Smarty_Internal_Template $_smarty_tpl) {
?> <?php $_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section class="contenedor_tabla">
    <table class="tabla">
        <thead>
            <tr>
                <th>id tipo</th>
                <th> Terreno </th>
                 <th class="Editar">Editar</th>
                <th class="Eliminar">Eliminar</th>
            </tr>
        </thead>
        <tbody id="tabla">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tipos']->value, 'tipo');
$_smarty_tpl->tpl_vars['tipo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tipo']->value) {
$_smarty_tpl->tpl_vars['tipo']->do_else = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['tipo']->value->id;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['tipo']->value->terreno;?>
</td>
                    <td><button class="btnEditar"><a href="editTipo/<?php echo $_smarty_tpl->tpl_vars['tipo']->value->id;?>
">Editar</a></button></td>
                    <td><button class="btnEliminar"><a href="deleteTipo/<?php echo $_smarty_tpl->tpl_vars['tipo']->value->id;?>
">Borrar</a></button></td>
                </tr>   
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
</section> 

<form action="insertTipo" method="POST" class="formTabla" id="formTablaTipo" enctype="multipart/form-data">
<label for="">Ingresar terreno:</label> <input type="text" name="terreno" id="inputTerreno" placeholder="Arena">
 <div >
            <button type="submit" id="">Agregar</button>
          </div> 
</form>



     <?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
