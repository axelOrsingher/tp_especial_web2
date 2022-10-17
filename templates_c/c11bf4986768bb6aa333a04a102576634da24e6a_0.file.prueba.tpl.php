<?php
/* Smarty version 4.2.1, created on 2022-10-11 01:29:38
  from 'C:\xampp\htdocs\tp especial\series\templates\prueba.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6344aae2cff874_33426738',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c11bf4986768bb6aa333a04a102576634da24e6a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp especial\\series\\templates\\prueba.tpl',
      1 => 1665444574,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_6344aae2cff874_33426738 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2>Modificar producto</h2>
<form action="update" method="POST">
    <input name="id" style="display:none;" type="text" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    <p>Nombre del producto: <input name="titulo" type="text"></p>
    <p>Nombre del producto: <input name="genero" type="text"></p>
    <p>Descripcion: <input name="descripcion" type="text"></p>
    
    
    <button type="submit">Modificar</button>
</form>
<?php }
}
