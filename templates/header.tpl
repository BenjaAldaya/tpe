<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{BASE_URL}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phantom</title>
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body class="bg-dark">
<header class="sticky-top mb-3">
    <nav class="container-fluid navbar navbar-expand-lg navbar-dark bg-info">
        <a class="navbar-brand" href="home">Phantom</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto d-flex w-100">
                <li class="nav-item active">
                    <a class="nav-link text-light" href="home">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="about">About</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-light" href="registro">Crear cuenta</a>
                </li>
                {if (isset($smarty.session.USER_NAME)) && ($smarty.session.PERMISOS == 3)}
                <li class="nav-item">
                <a class="nav-link text-light" href="admin">Admin</a>
                </li>
                {/if}
                {if isset($smarty.session.USER_NAME)}                    
                    <li class="nav-item ml-auto">
                        <a class="nav-link" href="logout">{$smarty.session.USER_NAME} (LOGOUT)</a>
                    </li>
                {else}
                    <li class="nav-item ml-auto" >
                    <a class="nav-link text-light" href="login">Login</a>
                </li>
                {/if}
            </ul>
        </div>
    </nav>
</header>