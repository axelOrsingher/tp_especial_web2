<?php
/* Smarty version 4.2.1, created on 2022-10-14 19:26:17
  from 'C:\xampp\htdocs\tp especial\series\templates\admin-lista.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63499bb91a57e5_55939414',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8f2b3541d7d3713cb1bd2722122df9b8872ecd2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp especial\\series\\templates\\admin-lista.tpl',
      1 => 1665768371,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:form_serie.tpl' => 1,
    'file:form_genero.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63499bb91a57e5_55939414 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:form_serie.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
                <a href='borrarserie/<?php echo $_smarty_tpl->tpl_vars['serie']->value->id;?>
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
                <a href='borrargenero/<?php echo $_smarty_tpl->tpl_vars['gen']->value->id;?>
' type='button' class='btn btn-danger'>Borrar</a>
                <a href='editargenero/<?php echo $_smarty_tpl->tpl_vars['gen']->value->id;?>
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
