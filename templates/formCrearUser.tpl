{include file="templates/header.tpl"}

<h2>Registrate:</h2>
<form action="registrar" method="POST">
    <input type="text" name="usuario" id="id" placeholder="Ingrese su usuario" required>
    <input type="password" name="contrasenia" id="password" placeholder="Ingrese su contraseña" required>
    <button type="submit" id="">Aceptar</button>
</form>

{include file="templates/footer.tpl"}

