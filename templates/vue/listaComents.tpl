{literal}

<h2> {{titulo}} </h2>

<h3> Filtrar por puntaje </h3>

<form id="filtro">
    <select name="puntaje" required class="form-control form-control-lg">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>
    <input v-on:click="filtrar" type="submit" class="btn btn-primary">
</form>

<h3> Ordenar por </h3>

<form id="orden">
    <select name="atributo" required class="form-control form-control-lg">
        <option value="fecha">Fecha</option>
        <option value="puntaje">Puntaje</option>
    </select>
    <select name="criterio" required class="form-control form-control-lg">
        <option value="asc">Ascendente</option>
        <option value="desc">Descendente</option>
    </select>
    <input v-on:click="ordenarPor" type="submit" class="btn btn-primary">
</form>

<ul>
    <li v-for="comentario in comentarios"> Usuario: {{comentario.usuario}} - Comentario: {{comentario.comentario}} - Puntaje : {{comentario.puntaje}} - Fecha : {{comentario.fecha}}
    <a v-if="rol == 'admin'" v-on:click="deleteComentario(comentario.id)" data-id="comentario.id" class="btn btn-outline-danger">Borrar</a></li>
</ul>

{/literal}