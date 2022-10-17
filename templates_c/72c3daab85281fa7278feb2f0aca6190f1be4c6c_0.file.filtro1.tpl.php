<?php
/* Smarty version 4.2.1, created on 2022-10-13 21:03:56
  from 'C:\xampp\htdocs\tp especial\series\templates\filtro1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6348611cbd0a25_93065856',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72c3daab85281fa7278feb2f0aca6190f1be4c6c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp especial\\series\\templates\\filtro1.tpl',
      1 => 1665687833,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:filtro.tpl' => 1,
  ),
),false)) {
function content_6348611cbd0a25_93065856 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:filtro.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['genero']->value, 'gen');
$_smarty_tpl->tpl_vars['gen']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['gen']->value) {
$_smarty_tpl->tpl_vars['gen']->do_else = false;
?>
    <li>
        <b><?php echo $_smarty_tpl->tpl_vars['genero']->value->romance;?>
</b> -<?php echo $_smarty_tpl->tpl_vars['gen']->value->genero;?>

    </li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul><?php }
}
