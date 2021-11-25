<?php
/* Smarty version 3.1.34-dev-7, created on 2021-11-25 03:51:45
  from 'C:\xampp\htdocs\tpe-web2\templates\formComentarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_619efa41cc22e7_72896637',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a04f4ef343fd22f97b8a0f86eac4ac8161bad822' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe-web2\\templates\\formComentarios.tpl',
      1 => 1637808704,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619efa41cc22e7_72896637 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="" method="POST" class="formTabla" id="formComentarios">

  <label for="">Comentario</label> <input type="text" name="comentario" id="comentario" placeholder="Comentario">

  <label for="">Puntuacion</label> <input type="number" name="puntuacion" min="1" max="5" id="puntuacion" placeholder="Del 1 a 5">
   
  <div class="botonesTabla">

    <button  id="btnAgregar">Agregar</button>

  </div>
</form><?php }
}
