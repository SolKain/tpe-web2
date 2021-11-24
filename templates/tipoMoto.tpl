 {include file="templates/header.tpl"}

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
            {foreach from=$tipos item=$tipo}
                <tr>
                    <td>{$tipo->id}</td>
                    <td>{$tipo->terreno}</td>
                    <td><button class="btnEditar"><a href="editTipo/{$tipo->id}">Editar</a></button></td>
                    <td><button class="btnEliminar"><a href="deleteTipo/{$tipo->id}">Borrar</a></button></td>
                </tr>   
            {/foreach}
        </tbody>
    </table>
</section> 

<form action="insertTipo" method="POST" class="formTabla" id="formTablaTipo" enctype="multipart/form-data">
<label for="">Ingresar terreno:</label> <input type="text" name="terreno" id="inputTerreno" placeholder="Arena">
 <div >
            <button type="submit" id="">Agregar</button>
          </div> 
</form>



     {include file="templates/footer.tpl"}