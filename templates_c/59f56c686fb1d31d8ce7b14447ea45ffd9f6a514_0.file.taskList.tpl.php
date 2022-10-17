<?php
/* Smarty version 4.2.1, created on 2022-10-05 17:13:06
  from 'C:\xampp\htdocs\ejemploprofe2\todo-list\templates\taskList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633d9f02c42b92_79135819',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59f56c686fb1d31d8ce7b14447ea45ffd9f6a514' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ejemploprofe2\\todo-list\\templates\\taskList.tpl',
      1 => 1664982763,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:form_alta.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_633d9f02c42b92_79135819 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:form_alta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<ul class="list-group">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['series']->value, 'serie');
$_smarty_tpl->tpl_vars['serie']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['serie']->value) {
$_smarty_tpl->tpl_vars['serie']->do_else = false;
?>
        <li>
            <b><?php echo $_smarty_tpl->tpl_vars['serie']->value->titulo;?>
</b> -<?php echo $_smarty_tpl->tpl_vars['serie']->value->genero;?>
 - <?php echo $_smarty_tpl->tpl_vars['serie']->value->descripcion;?>
- </span>
            <div class="ml-auto">
                <a href='delete/<?php echo $_smarty_tpl->tpl_vars['serie']->value->id;?>
' type='button' class='btn btn-danger'>Borrar</a>
                <a class='btn btn-success btn-sm' href="ver/<?php echo $_smarty_tpl->tpl_vars['serie']->value->id;?>
">VER</a>
            </div>
        </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<ul class="list-group">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero');
$_smarty_tpl->tpl_vars['genero']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
$_smarty_tpl->tpl_vars['genero']->do_else = false;
?>
        <li>
            <span> <b><?php echo $_smarty_tpl->tpl_vars['genero']->value->tipogenero;?>
</b>  </span>
            <div class="ml-auto">
                <a href='delete/<?php echo $_smarty_tpl->tpl_vars['genero']->value->id;?>
' type='button' class='btn btn-danger'>Borrar</a>
                <a class='btn btn-success btn-sm' href="ver/<?php echo $_smarty_tpl->tpl_vars['genero']->value->id;?>
">VER</a>
            </div>
        </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
