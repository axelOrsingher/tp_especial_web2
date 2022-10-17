<?php
/* Smarty version 4.2.1, created on 2022-10-10 20:39:56
  from 'C:\xampp\htdocs\tp especial\series\templates\edito.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634466fc0330c0_06511163',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '823ffa2ed85815dc694d37b85ee360a60163c3fd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp especial\\series\\templates\\edito.tpl',
      1 => 1665427192,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:form_editar.tpl' => 1,
  ),
),false)) {
function content_634466fc0330c0_06511163 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:form_editar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
        </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php }
}
