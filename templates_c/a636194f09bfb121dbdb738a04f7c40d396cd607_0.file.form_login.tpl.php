<?php
/* Smarty version 4.2.1, created on 2022-10-14 15:16:43
  from 'C:\xampp\htdocs\tp especial\series\templates\form_login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349613b7a3de9_91917344',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a636194f09bfb121dbdb738a04f7c40d396cd607' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp especial\\series\\templates\\form_login.tpl',
      1 => 1665700049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6349613b7a3de9_91917344 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <form method="POST" action="verificar">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="contraseña">contraseña</label>
                <input type="contraseña" class="form-control" id="contraseña" name="contraseña">
            </div>
        <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
            <div class="alert alert-danger">
                <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

            </div>
        <?php }?>
             <button type="submit" class="btn btn-primary">Entrar</button>
     </form>

 <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php }
}
