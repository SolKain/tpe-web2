{include file="templates/header.tpl"}

<h2>Registrate:</h2>
<form action="verify" method="post">
    <input type="text" name="username" id="username" placeholder="Ingrese su usuario">
    <input type="password" name="password" id="password" placeholder="Ingrese su contraseña" >
    <button type="submit" id="">Aceptar</button>
</form>

{include file="templates/footer.tpl"}