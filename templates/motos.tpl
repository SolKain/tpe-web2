 {include file="templates/header.tpl"}

<section>
        <div class="filtros">
            <label>Filtro por tipo de motor: <input type="text" id="filtro-motor"></label>
            <label>Filtro por deposito de combustible: <input type="text" id="filtro-deposito"></label>
            <label>Filtro por cilindrada: <input type="text" id="filtro-cilindrada"></label>
            <label>Filtro por velocidad: <input type="text" id="filtro-velocidad"></label>
        </div>
        <div>
            <button id="button-filtro" class="btn-filtro">Filtrar</button>
        </div>

    </section>
    <section>
        <table>
            <thead>
                <tr>
                    <th class="titulo-motor">Motor</th>
                    <th>Deposito de combustible</th>
                    <th>Cilindrada</th>
                    <th>Velocidad máxima</th>
                    <th class="Editar">Editar</th>
                    <th class="Eliminar">Eliminar</th>
                </tr>
            </thead>
            <tbody id="tabla" class="body-tabla"></tbody>
        </table>
    </section>

    <section id="input-tabla">
        <label>Ingresar tipo de motor: <input type="text" id="input-motor"> </label>
        <label>Ingresar deposito de combustible: <input type="text" id="input-deposito"> </label>
        <label>Ingresar cilindrada: <input type="text" id="input-cilindrada"> </label>
        <label>Ingresar velocidad maxima: <input type="text" id="input-velocidad"> </label>
    </section>

    <section class="botonesTabla">
        <button id="button-agregar">Agregar</button>
        <button id="button-mostrar">Mostrar</button>
        <button id="button-mostrar3">Mostrar 3</button>
    </section>


    <section id=muestraMotos>
        <div class="ns200">
            <h3>Bajaj ns 200 FI</h3>
            <img src="images/NS200.png" alt="ns200">
        </div>
        <div class="z400">
            <h3>Kawasaki Z400</h3>
            <img src="images/Kawasaki-Z400.jpg" alt="z400">
        </div>
        <div class="tnt600">
            <h3>Benelli TNT 600GT</h3>
            <img src="images/tnt-600gt.jpg" alt="TNT 600GT">
        </div>
    </section>

     {include file="templates/footer.tpl"}