<?php
/* Smarty version 4.2.1, created on 2022-10-11 19:20:03
  from 'C:\xampp\htdocs\tp especial\series\templates\form_editarserie.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6345a5c39b25d1_03849395',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a75bf0f690390612e5f8cc96a6bb4eeec0eb66c6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp especial\\series\\templates\\form_editarserie.tpl',
      1 => 1665446078,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6345a5c39b25d1_03849395 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<form action="update/<?php echo $_smarty_tpl->tpl_vars['series']->value->id;?>
" method="POST" class="my-4">
    <div class="row">
        <div class="form-group">
            <label>Título</label>
            <input name="titulo" type="text" class="form-control">
        </div>
        <td><?php echo $_smarty_tpl->tpl_vars['series']->value->id;?>
</td>
    </div>
        <div class="form-group">
            <label>Genero</label>
              <select name="genero" class="form-control">
                    <option value="Drama">Drama</option>
                    <option value="Comedia">Comedia</option>
                    <option value="Accion">Accion</option>
                    <option value="Romance">Romance</option>
                    <option value="Terror">Terror</option>
                </select>
        </div>
        <div class="form-group">
            <label>Descripcion</label>
            <input name="descripcion" type="text" class="form-control">
        </div>
        
    <button type="submit" class="btn btn-primary mt-2">editar</button>
    
</form>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
