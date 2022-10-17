<?php
/* Smarty version 4.2.1, created on 2022-10-14 17:31:29
  from 'C:\xampp\htdocs\tp especial\series\templates\genero.detalle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634980d1163035_94645267',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '765d55c429660d97ffa6a50e5611d072be29e7a5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp especial\\series\\templates\\genero.detalle.tpl',
      1 => 1665700107,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634980d1163035_94645267 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<h1> Informacion del genero </h1>
<p><?php echo $_smarty_tpl->tpl_vars['generos']->value->id;?>
</p>
<p><?php echo $_smarty_tpl->tpl_vars['generos']->value->infogenero;?>
</p>
<a href="categorias">volver</a>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
