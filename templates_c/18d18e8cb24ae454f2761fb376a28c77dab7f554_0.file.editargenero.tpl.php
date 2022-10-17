<?php
/* Smarty version 4.2.1, created on 2022-10-13 23:51:48
  from 'C:\xampp\htdocs\tp especial\series\templates\editargenero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6348887481c119_81546326',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18d18e8cb24ae454f2761fb376a28c77dab7f554' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp especial\\series\\templates\\editargenero.tpl',
      1 => 1665697888,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6348887481c119_81546326 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<form action="actualizo/<?php echo $_smarty_tpl->tpl_vars['generos']->value->id;?>
" method="POST" class="my-4">
    <div class="row">
    </div>
        <div class="form-group">
            <label>Genero</label>
            <td><?php echo $_smarty_tpl->tpl_vars['generos']->value->id;?>
</td>
              <select name="id" class="form-control">
                    <option value="Drama">Drama</option>
                    <option value="Comedia">Comedia</option>
                    <option value="Accion">Accion</option>
                    <option value="Romance">Romance</option>
                    <option value="Terror">Terror</option>
                </select>
        </div>
        <div class="form-group">
            <label>Descripcion</label>
            <input name="infogenero" type="text" class="form-control">
        </div>
        
    <button type="submit" class="btn btn-primary mt-2">editar</button>
    
</form>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
