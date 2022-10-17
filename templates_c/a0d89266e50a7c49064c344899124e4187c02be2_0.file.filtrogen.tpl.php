<?php
/* Smarty version 4.2.1, created on 2022-10-14 16:53:25
  from 'C:\xampp\htdocs\tp especial\series\templates\filtrogen.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634977e56c4867_51051502',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0d89266e50a7c49064c344899124e4187c02be2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp especial\\series\\templates\\filtrogen.tpl',
      1 => 1665759202,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634977e56c4867_51051502 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="buscador" method="POST" class="my-4">
            <label>Genero</label>
              <select name="genero" class="form-control">
                    <option value="Drama">Drama</option>
                    <option value="Comedia">Comedia</option>
                    <option value="Accion">Accion</option>
                    <option value="Romance">Romance</option>
                    <option value="Terror">Terror</option>
                </select>
        </div>
    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
    
</form><?php }
}
