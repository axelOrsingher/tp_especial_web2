<?php
/* Smarty version 4.2.1, created on 2022-10-11 22:14:34
  from 'C:\xampp\htdocs\tp especial\series\templates\categorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6345ceaab8b779_51907913',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae3ea258b23a684f390b36fb2018d74760782388' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp especial\\series\\templates\\categorias.tpl',
      1 => 1665519271,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:tabla.tpl' => 1,
    'file:tabalgen.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6345ceaab8b779_51907913 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:tabla.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
<?php $_smarty_tpl->_subTemplateRender("file:tabalgen.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
            <a href='ver/<?php echo $_smarty_tpl->tpl_vars['generos']->value->id;?>
' type='button' class='btn btn-success btn-sm'>Ver</a>
        </td>
    </tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</tbody>
</table>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
