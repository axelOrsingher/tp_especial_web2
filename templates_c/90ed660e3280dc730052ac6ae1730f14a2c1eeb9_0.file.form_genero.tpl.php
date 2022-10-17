<?php
/* Smarty version 4.2.1, created on 2022-10-04 20:06:29
  from 'C:\xampp\htdocs\ejemploprofe2\todo-list\templates\form_genero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633c7625b364a1_32727898',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90ed660e3280dc730052ac6ae1730f14a2c1eeb9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ejemploprofe2\\todo-list\\templates\\form_genero.tpl',
      1 => 1664906781,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_633c7625b364a1_32727898 (Smarty_Internal_Template $_smarty_tpl) {
?><h2> Paso 2: Agregue informacion del genero que selecciono antes!</h2>

<form action="addgeneros" method="POST">
    <div class="row">
        <div class="form-group">
            <label>Genero</label>
              <select name="generos" class="form-control">
                    <option value="Drama">Drama</option>
                    <option value="Comedia">Comedia</option>
                    <option value="Accion">Accion</option>
                    <option value="Romance">Romance</option>
                    <option value="Terror">Terror</option>
                </select>
            <label>Informacion Genero</label>
                <input name="infogenero" type="text" class="form-control">
        </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form><?php }
}
