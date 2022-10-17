<?php
/* Smarty version 4.2.1, created on 2022-10-06 17:58:18
  from 'C:\xampp\htdocs\ejemploprofe2\todo-list\templates\serie.detalle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633efb1a529c52_98865214',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5cfab5a6d9f3458180d8297aaf665ad04d2f695e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ejemploprofe2\\todo-list\\templates\\serie.detalle.tpl',
      1 => 1664983295,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_633efb1a529c52_98865214 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo BASE_URL;?>
">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>series</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>

    <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


        <h1><?php echo $_smarty_tpl->tpl_vars['serie']->value->titulo;?>
</h1>
        <p><?php echo $_smarty_tpl->tpl_vars['serie']->value->genero;?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['serie']->value->descripcion;?>
</p>

        <a href="">volver</a>


    <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html><?php }
}
