 {include file="templates/header.tpl"}
    
     {if $isLoggedIn}
    <form action="edit/{$idMoto}" method="POST" class="formTabla" id="formTabla" enctype="multipart/form-data">
          <label for="">Ingresar color:</label> <input type="text" name="color" id="inputColor" placeholder="Blanco">
          <label for="">Ingresar cilindrada:</label> <input type="text" name="cilindrada" id="inputCilindrada" placeholder="150">
          <label for="">Ingresar tanque:</label> <input type="text" name="tanque" id="inputTanque" placeholder="10">
          <label for="">Ingresar tipo:</label><input type="text" name="id_tipo_moto" id="inputTipoMoto" placeholder="1">
          <div >
            <button type="submit" id="">Editar</button>
          </div> 
        </form>
{/if}
{include file="templates/footer.tpl"}