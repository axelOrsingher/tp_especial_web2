<?php
/* Smarty version 4.2.1, created on 2022-10-11 23:27:43
  from 'C:\xampp\htdocs\tp especial\series\templates\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6345dfcf4e8620_58196427',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97adef3fb15a81dc7dfa9b45cc24003acf0c283f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp especial\\series\\templates\\error.tpl',
      1 => 1665519765,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6345dfcf4e8620_58196427 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  
        <h1> ERROR!</h1>
        <h2> <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
 </h2>

    
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
