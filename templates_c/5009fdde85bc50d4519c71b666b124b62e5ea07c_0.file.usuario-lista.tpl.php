<?php
/* Smarty version 4.2.1, created on 2022-10-14 17:29:48
  from 'C:\xampp\htdocs\tp especial\series\templates\usuario-lista.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349806cc34dd5_40983826',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5009fdde85bc50d4519c71b666b124b62e5ea07c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp especial\\series\\templates\\usuario-lista.tpl',
      1 => 1665761241,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:serietabla.tpl' => 1,
    'file:generotabla.tpl' => 1,
  ),
),false)) {
function content_6349806cc34dd5_40983826 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:serietabla.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<table class="table">
<tbody>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['series']->value, 'serie');
$_smarty_tpl->tpl_vars['serie']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['serie']->value) {
$_smarty_tpl->tpl_vars['serie']->do_else = false;
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['serie']->value->titulo;?>
</td> 
        <td><?php echo $_smarty_tpl->tpl_vars['serie']->value->genero;?>
 </td> 
        <td><?php echo $_smarty_tpl->tpl_vars['serie']->value->descripcion;?>
</td>
        <td>
            <a href='ver/<?php echo $_smarty_tpl->tpl_vars['serie']->value->id;?>
' type='button' class='btn btn-success btn-sm'>Ver</a>
        </td>
    </tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</tbody>
</table>
<?php $_smarty_tpl->_subTemplateRender("file:generotabla.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<table class="table">
<tbody>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero');
$_smarty_tpl->tpl_vars['genero']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
$_smarty_tpl->tpl_vars['genero']->do_else = false;
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['genero']->value->id;?>
</td> 
        <td><?php echo $_smarty_tpl->tpl_vars['genero']->value->infogenero;?>
 </td> 
    
        <td>
            <a href='vergenero/<?php echo $_smarty_tpl->tpl_vars['genero']->value->id;?>
' type='button' class='btn btn-success btn-sm'>Ver</a>
        </td>
    </tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tbody>
</table><?php }
}
