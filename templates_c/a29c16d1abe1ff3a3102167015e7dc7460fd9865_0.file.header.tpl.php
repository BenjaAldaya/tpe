<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-27 21:42:13
  from 'C:\xampp\htdocs\proyectos\segundocuatri\TPE\tpe\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f70eb15e0b3b2_60028958',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a29c16d1abe1ff3a3102167015e7dc7460fd9865' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\segundocuatri\\TPE\\tpe\\templates\\header.tpl',
      1 => 1601235731,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f70eb15e0b3b2_60028958 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <base href="<?php echo BASE_URL;?>
">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body class="bg-dark">
<header>
    <nav class="container-fluid navbar navbar-expand-lg navbar-light bg-info mb-3">
    <a class="navbar-brand" href="home">Phantom</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link text-primary" href="home">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-primary" href="about">About</a>
            </li>
            <li>
            <a class="nav-link text-primary" href="registro">Crear cuenta</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input name="user" type="text" placeholder="Usuario" class="form-control">
            <input name="passwrod" type="password" placeholder="Contraseña" class="form-control">
            <button class="btn btn-primary w-10">Ingresar</button>
        </form>
    </div>
    </nav>
</header><?php }
}
