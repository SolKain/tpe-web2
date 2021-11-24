<?php
/* Smarty version 3.1.34-dev-7, created on 2021-11-17 22:54:27
  from 'C:\xampp\htdocs\tpe-web2\templates\motoParticular.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61957a13a1eab5_70561742',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75a7594893f36534cde7c9595b450f178d379c23' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe-web2\\templates\\motoParticular.tpl',
      1 => 1637185995,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61957a13a1eab5_70561742 (Smarty_Internal_Template $_smarty_tpl) {
?> <?php $_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<section>
        <table>
            <thead>
                <tr>
                 <th> Color </th>
                <th>Cilindrada</th>
                <th>Tanque</th>
                <th>Tipo</th>
                </tr>
            </thead>
            <tbody id="tabla" class="body-tabla">
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['moto']->value->color;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['moto']->value->cilindrada;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['moto']->value->tanque;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['moto']->value->terreno;?>
</td>
             </tr>
                         </tbody>
        </table>
    </section>
     <?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
