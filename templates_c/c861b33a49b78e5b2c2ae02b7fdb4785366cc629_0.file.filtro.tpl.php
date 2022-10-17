<?php
/* Smarty version 4.2.1, created on 2022-10-14 18:42:52
  from 'C:\xampp\htdocs\tp especial\series\templates\filtro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349918c185199_78730876',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c861b33a49b78e5b2c2ae02b7fdb4785366cc629' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp especial\\series\\templates\\filtro.tpl',
      1 => 1665765768,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:form_filtro.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6349918c185199_78730876 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:form_filtro.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<ul class="list-group">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gener']->value, 'gen');
$_smarty_tpl->tpl_vars['gen']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['gen']->value) {
$_smarty_tpl->tpl_vars['gen']->do_else = false;
?>
        <li>
            <?php echo $_smarty_tpl->tpl_vars['gen']->value->titulo;?>
 - <?php echo $_smarty_tpl->tpl_vars['gen']->value->id;?>
 -  <?php echo $_smarty_tpl->tpl_vars['gen']->value->descripcion;?>
 - <?php echo $_smarty_tpl->tpl_vars['gen']->value->infogenero;?>

        </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
