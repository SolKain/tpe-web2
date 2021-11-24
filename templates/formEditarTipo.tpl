 {include file="templates/header.tpl"}
  {if $isLoggedIn}
<form action="editTipo/{$idTipo}" method="POST" class="formTabla" id="formTablaTipo" enctype="multipart/form-data">
<label for="">Ingresar terreno:</label> <input type="text" name="terreno" id="inputTerreno" placeholder="Arena">
    <div >
    <button type="submit" id="">Editar</button>
    </div> 
</form>

</div>
    <h4 class= error>  {$error}</h4>
</div>
{/if}
 {include file="templates/footer.tpl"}
