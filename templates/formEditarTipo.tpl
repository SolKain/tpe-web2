 {include file="templates/header.tpl"}
<form action="editTipo/{$idTipo}" method="POST" class="formTabla" id="formTablaTipo" enctype="multipart/form-data">
<label for="">Ingresar terreno:</label> <input type="text" name="terreno" id="inputTerreno" placeholder="Arena">
    <div >
    <button type="submit" id="">Editar</button>
    </div> 
</form>

 {include file="templates/footer.tpl"}
