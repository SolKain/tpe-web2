<?php
/* Smarty version 3.1.34-dev-7, created on 2021-10-10 21:07:06
  from 'C:\xampp\htdocs\tpe-web2\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_616339da49ff33_21492900',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f15bbac824bd2cde20170f0e313b84e386bdd94c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe-web2\\templates\\home.tpl',
      1 => 1633892742,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_616339da49ff33_21492900 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <?php $_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  
  <section class="introduccion">
        <h3>Somos Tandil Motos. Aquí encontrarás tu próxima moto y todo el equipamiento que necesites para vos!</h3>
    </section>

    <h2>Conoce algunas de nuestras motos mas buscadas por nuestros clientes!</h2>

    <section class="contenedor">
        <div>
            <h3>Honda Wave</h3>
            <img src="images/Blanco_Wave1101.png" alt="Honda Wave">
        </div>
        <div>
            <h3>Yamaha FZ 25</h3>
            <img src="images/fz25.png" alt="fz 25">
        </div>
        <div>
            <h3>Benelli 302 r</h3>
            <img src="images/302r-benelli-1-300x300.jpg" alt="benelli 302r">
        </div>
        <div>
            <h3>Kawasaki Z400</h3>
            <img src="images/Kawasaki-Z400.jpg" alt="z400">
        </div>
        <div>
            <h3>Benelli TNT 600GT</h3>
            <img src="images/tnt-600gt.jpg" alt="TNT 600GT">
        </div>
    </section>

    <div class="subimg">
        <h4>Para mas modelos dirigete a nuestro link <a href="motos.html">"MOTOS"</a></h4>
    </div>

    <div class="titulonoti">
        <h2>Noticias</h2>
    </div>

    <section id="contenedornoti">
        <article class="izq">
            <h3><a href="mantenimiento.html">SUZUKI PRESENTÓ LA GIXXER 300</a></h3>
            <img src="images/suzuki.png" alt="gixxer300">
            <p>Suzuki, mediante su socio chino, está lanzando por estos días la GSX-S300 en aquel país. Te contamos
                todos sus detalles y qué posibilidades tiene de arribar a nuestra región.</p>
        </article>
        <article class="centro">
            <h3><a href="mantenimiento.html">CONOCE LA NUEVA Honda CB190-R</a></h3>
            <img src="images/bros.jpeg" alt="Honda Bros">
            <p>Inspirada en la CB1000R, el nuevo diseño de la exitosa naked de Honda apuesta a mantener la deportividad
                que siempre la caracterizó. Ligera y compacta, recibió mejoras en la ergonomía.</p>
        </article>
        <article class="der">
            <h3><a href="mantenimiento.html">CONOCE LA VERSION 2020 DE LA BMW G310R</a></h3>
            <img src="images/bmw.jpg" alt="BMW g310r">
            <p>BMW Motorrad está lista para lanzar el primer restyling de su modelo de entrada de gama, la naked G 310 R
                y su hermana aventurera G 310 GS.</p>
        </article>
    </section>

    <?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
