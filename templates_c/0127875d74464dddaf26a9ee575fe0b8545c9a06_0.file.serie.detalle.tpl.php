<?php
/* Smarty version 4.2.1, created on 2022-10-14 17:31:31
  from 'C:\xampp\htdocs\tp especial\series\templates\serie.detalle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634980d3b2bf09_01040018',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0127875d74464dddaf26a9ee575fe0b8545c9a06' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp especial\\series\\templates\\serie.detalle.tpl',
      1 => 1665700120,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634980d3b2bf09_01040018 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <h1><?php echo $_smarty_tpl->tpl_vars['serie']->value->titulo;?>
</h1>
    <p><?php echo $_smarty_tpl->tpl_vars['serie']->value->genero;?>
</p>
    <p><?php echo $_smarty_tpl->tpl_vars['serie']->value->descripcion;?>
</p>

    <a href="">volver</a>


<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
