{include file="templates/header.tpl"}


  
    <table>
        <thead>
            <th>Usuario</th>
            <th>Administrador</th>
            <th>Eliminar</th>
            <th>Editar</th>
        </thead>
                <tbody id="">

            {foreach from=$usuarios item=user}
                <tr>
            <td>{$user->usuario}</td>
            {if $user->administrador == 0}
            <td>Usuario normal</td>
            {else}
            <td>Administrador</td>
            {/if}
            <td><button class="btnEliminar"><a href="userDelete/{$user->id}">Borrar</a></button></td>
            <td><button class="btnEditar"><a href="userEdit/{$user->id}">Editar</a></button></td>
            </tr>
            {/foreach}
            </tbody>

    </table>
     

    {include file="templates/footer.tpl"}
