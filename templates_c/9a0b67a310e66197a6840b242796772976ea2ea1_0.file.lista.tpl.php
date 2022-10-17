<?php
/* Smarty version 4.2.1, created on 2022-10-11 20:51:39
  from 'C:\xampp\htdocs\tp especial\series\templates\lista.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6345bb3b775742_20377135',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a0b67a310e66197a6840b242796772976ea2ea1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp especial\\series\\templates\\lista.tpl',
      1 => 1665513688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:form_alta.tpl' => 1,
    'file:form_genero.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6345bb3b775742_20377135 (Smarty_Internal_Template $_smarty_tpl) {
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
                <a href='editar/<?php echo $_smarty_tpl->tpl_vars['serie']->value->id;?>
' type='button' class='btn btn-success btn-sm'>Editar</a>
            </div>
        </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php $_smarty_tpl->_subTemplateRender("file:form_genero.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<ul class="list-group">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'gen');
$_smarty_tpl->tpl_vars['gen']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['gen']->value) {
$_smarty_tpl->tpl_vars['gen']->do_else = false;
?>
        <li>
        <span> <b><?php echo $_smarty_tpl->tpl_vars['gen']->value->id;?>
 </b> - <?php echo $_smarty_tpl->tpl_vars['gen']->value->infogenero;?>
 </span>
            <div class="ml-auto">
                <a href='deleteg/<?php echo $_smarty_tpl->tpl_vars['gen']->value->id;?>
' type='button' class='btn btn-danger'>Borrar</a>
                <a href='editarg/<?php echo $_smarty_tpl->tpl_vars['gen']->value->id;?>
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
