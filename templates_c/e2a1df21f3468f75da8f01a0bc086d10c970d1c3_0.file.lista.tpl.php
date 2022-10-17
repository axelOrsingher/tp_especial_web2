<?php
/* Smarty version 4.2.1, created on 2022-10-06 18:12:52
  from 'C:\xampp\htdocs\ejemploprofe2\todo-list\templates\lista.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633efe843b9b25_07802665',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2a1df21f3468f75da8f01a0bc086d10c970d1c3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ejemploprofe2\\todo-list\\templates\\lista.tpl',
      1 => 1665072769,
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
function content_633efe843b9b25_07802665 (Smarty_Internal_Template $_smarty_tpl) {
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
                <a href='ver/<?php echo $_smarty_tpl->tpl_vars['serie']->value->id;?>
' type='button' class='btn btn-success btn-sm'>Ver</a>
                <a href='editar/<?php echo $_smarty_tpl->tpl_vars['serie']->value->id;?>
' type='button' class='btn btn-success btn-sm'>Editar</a>
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
            <span> <b><?php echo $_smarty_tpl->tpl_vars['genero']->value->infogenero;?>
</b>  </span>
            <div class="ml-auto">
                <a href='delete/<?php echo $_smarty_tpl->tpl_vars['genero']->value->id;?>
' type='button' class='btn btn-danger'>Borra
                <a href='ver/<?php echo $_smarty_tpl->tpl_vars['serie']->value->id;?>
' type='button' class='btn btn-success btn-sm'>Ver</a>
                <a href='editar/<?php echo $_smarty_tpl->tpl_vars['genero']->value->id;?>
' type='button' class='btn btn-success btn-sm'>Editar</a>

            </div>
        </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
