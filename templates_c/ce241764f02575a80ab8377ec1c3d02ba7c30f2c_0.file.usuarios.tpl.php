<?php
/* Smarty version 3.1.34-dev-7, created on 2021-11-18 20:22:20
  from 'C:\xampp\htdocs\tpe-web2\templates\usuarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6196a7ec206c42_31805473',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce241764f02575a80ab8377ec1c3d02ba7c30f2c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe-web2\\templates\\usuarios.tpl',
      1 => 1637263336,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6196a7ec206c42_31805473 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


  
    <table>
        <thead>
            <th>Usuario</th>
            <th>Administrador</th>
            <th>Eliminar</th>
            <th>Editar</th>
        </thead>
                <tbody id="">

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuarios']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
                <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->usuario;?>
</td>
            <?php if ($_smarty_tpl->tpl_vars['user']->value->administrador == 0) {?>
            <td>Usuario normal</td>
            <?php } else { ?>
            <td>Administrador</td>
            <?php }?>
            <td><button class="btnEliminar"><a href="userDelete/<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
">Borrar</a></button></td>
            <td><button class="btnEditar"><a href="userEdit/<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
">Editar</a></button></td>
            </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>

    </table>
     

    <?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
