<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Motos Tandil</title>
    <base href="{BASE_URL}">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <section class="encabezado">
            <h1>Tandil Motos</h1>
            <div class="btn_menu"><img src="images/menu.png" alt="menu"></div>
        </section>

        <nav class="menu">
            <ul class="botonera">
                <li><a href=index>Home</a></li>
                <li><a href=motos>Motos</a></li>
                <li><a href=tipos>Tipos</a></li>
                 {if $isLoggedIn && $isAdmin}
                    <li><a href=user>Usuarios</a></li>
                {/if}   
    
                {if !$isLoggedIn}
                    <li><a href=login>Login</a></li>
                {/if}                
                {if $isLoggedIn}
                    <li><a href=logout>Logout</a></li>
                {/if}
            </ul>
        </nav>
    </header>
