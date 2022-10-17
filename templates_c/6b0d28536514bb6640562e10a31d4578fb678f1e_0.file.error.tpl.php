<?php
/* Smarty version 4.2.1, created on 2022-10-02 22:18:02
  from 'C:\xampp\htdocs\ejemploprofe2\todo-list\templates\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6339f1fa2d5db4_88633908',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b0d28536514bb6640562e10a31d4578fb678f1e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ejemploprofe2\\todo-list\\templates\\error.tpl',
      1 => 1664741878,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6339f1fa2d5db4_88633908 (Smarty_Internal_Template $_smarty_tpl) {
?><html lang="en">
<head>
    <base href="<?php echo BASE_URL;?>
">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODOList</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>

<?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  
        <h1> ERROR!</h1>
        <h2> <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
 </h2>

    
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html>
<?php }
}
