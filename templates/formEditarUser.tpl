{include file="templates/header.tpl"}

   <h3>Cambiar permiso de usuario</h3>
    
    <form action="cambiarPermiso/{$idUsuario}" method="POST" >
    <label for="administrador">Administrador: </label>
        <input type="checkbox" name="administrador" id="administrador"><br>
        <button id="cambiar" type="submit" style="margin:10px 30px">Cambiar</button>
    </form>

{include file="templates/footer.tpl"}

