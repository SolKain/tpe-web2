 {include file="templates/header.tpl"}
<section>
        <table id="tablaMoto">
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
                <td>{$moto->color}</td>
                <td>{$moto->cilindrada}</td>
                <td>{$moto->tanque}</td>
                <td>{$moto->terreno}</td>
             </tr>
                         </tbody>
        </table>
    </section>


    <div id="lista">
</div>
<section>
          <table>
            <thead id="columnas">
              <th>Comentario</th>
              <th>Puntuacion</th>
              {if $isLoggedIn && $isAdmin}
              <th>Borrar</th>
              {/if}
            </thead>
            <tbody  id="tablaComentarios">
            </tbody>
          </table>

          {include file="templates/formComentarios.tpl"}
</section>

<script src="js/comentarios.js"></script>

{include file="templates/footer.tpl"}
