 {include file="templates/header.tpl"}
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

{if $rol == "user" || $rol == "admin"}
<h2>Agregar comentario de producto</h2>
  <form id="formComentarios" data-id_usuario="{$id_usuario}">
    <h5>Bienvenido</h5>
    <p name="usuario">{$usuario}</p>
    <div class="mb-3">
      <label class="form-label">Comentario</label>
      <input type="text" name="comentario" class="form-control">
    </div>
    <div class="mb-3">
      <label class="form-label">Puntaje</label>
      <input type="text" name="puntaje" class="form-control">
    </div>
    <input id="submitComentario" type="submit" class="btn btn-primary">
  </form>
{/if}

</div>
<script src="js/comentarios.js"></script>
{include file="templates/footer.tpl"}
