<?php
/* Smarty version 4.2.1, created on 2022-10-16 20:26:15
  from 'C:\xampp\htdocs\tp especial\series\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c4cc72f4ea3_31424347',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0cc2a27b2e70eb16a40143037d7708bb4da8891d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp especial\\series\\templates\\header.tpl',
      1 => 1665944772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634c4cc72f4ea3_31424347 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo BASE_URL;?>
">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Series</title>
</head>
<body>
  <header>
      <nav class="navbar navbar-expand-lg bg-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="">Series</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="">Home</a>
                </li>
                <?php if (!(isset($_SESSION))) {?>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="login">Ingresar</a>
                  </li>
                <?php } else { ?> 
                  <li class="nav-item ml-auto">
                    <a class="nav-link" aria-current="page" href="logout">Logout</a>
                  </li>
                <?php }?>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="categorias">Lista</a>
                  </li> 
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="buscador">Buscador</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
  </header>

    <!-- inicio main container -->
    <main class="container">
<?php }
}
