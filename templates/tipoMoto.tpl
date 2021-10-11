 {include file="templates/header.tpl"}

<section class="contenedor_tabla">
    <table class="tabla">
        <caption class="titulo_tabla">{$titulo}</caption>
        <thead>
            <tr>
                <th>id tipo</th>
                <th> Terreno </th>
            </tr>
        </thead>
        <tbody id="tabla">
            {foreach from=$tipo item=$tipo}
                <tr>
                    <td>{$tipo->id tipo}</td>
                    <td>{$tipo->Terreno}</td>
                </tr>   
            {/foreach}
        </tbody>
    </table>
</section> 



     {include file="templates/footer.tpl"}