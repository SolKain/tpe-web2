<?php
/* Smarty version 3.1.34-dev-7, created on 2021-10-11 00:08:02
  from 'C:\xampp\htdocs\tpe-web2\templates\motos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_616364423f8046_34048691',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2445b82531e029dcf3179160c77e55657d4d6306' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe-web2\\templates\\motos.tpl',
      1 => 1633903569,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_616364423f8046_34048691 (Smarty_Internal_Template $_smarty_tpl) {
?> <?php $_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section>
        <div class="filtros">
            <label>Filtro por tipo de motor: <input type="text" id="filtro-motor"></label>
            <label>Filtro por deposito de combustible: <input type="text" id="filtro-deposito"></label>
            <label>Filtro por cilindrada: <input type="text" id="filtro-cilindrada"></label>
            <label>Filtro por velocidad: <input type="text" id="filtro-velocidad"></label>
        </div>
        <div>
            <button id="button-filtro" class="btn-filtro">Filtrar</button>
        </div>

    </section>
    <section>
        <table>
            <thead>
                <tr>
                    <th class="titulo-motor">Motor</th>
                    <th>Deposito de combustible</th>
                    <th>Cilindrada</th>
                    <th>Velocidad máxima</th>
                    <th class="Editar">Editar</th>
                    <th class="Eliminar">Eliminar</th>
                </tr>
            </thead>
            <tbody id="tabla" class="body-tabla"></tbody>
        </table>
    </section>

    <section id="input-tabla">
        <label>Ingresar tipo de motor: <input type="text" id="input-motor"> </label>
        <label>Ingresar deposito de combustible: <input type="text" id="input-deposito"> </label>
        <label>Ingresar cilindrada: <input type="text" id="input-cilindrada"> </label>
        <label>Ingresar velocidad maxima: <input type="text" id="input-velocidad"> </label>
    </section>

    <section class="botonesTabla">
        <button id="button-agregar">Agregar</button>
        <button id="button-mostrar">Mostrar</button>
        <button id="button-mostrar3">Mostrar 3</button>
    </section>


    <section id=muestraMotos>
        <div class="ns200">
            <h3>Bajaj ns 200 FI</h3>
            <img src="images/NS200.png" alt="ns200">
        </div>
        <div class="z400">
            <h3>Kawasaki Z400</h3>
            <img src="images/Kawasaki-Z400.jpg" alt="z400">
        </div>
        <div class="tnt600">
            <h3>Benelli TNT 600GT</h3>
            <img src="images/tnt-600gt.jpg" alt="TNT 600GT">
        </div>
    </section>

     <?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
