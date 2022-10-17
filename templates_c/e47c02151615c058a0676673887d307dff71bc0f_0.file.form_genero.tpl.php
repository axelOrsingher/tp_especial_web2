<?php
/* Smarty version 4.2.1, created on 2022-10-14 00:43:00
  from 'C:\xampp\htdocs\tp especial\series\templates\form_genero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6348947499eb35_49192396',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e47c02151615c058a0676673887d307dff71bc0f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp especial\\series\\templates\\form_genero.tpl',
      1 => 1665700099,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6348947499eb35_49192396 (Smarty_Internal_Template $_smarty_tpl) {
?><h2> Seleccione  el genero previamente seleccionado y agregue informacion del mismo </h2>
<form action="agregargenero" method="POST" class="my-4">
    <div class="row">
        <div class="form-group">
            <label>Genero</label>
            <select name="id" class="form-control">
                <option value="Drama">Drama</option>
                <option value="Comedia">Comedia</option>
                <option value="Accion">Accion</option>
                <option value="Romance">Romance</option>
                <option value="Terror">Terror</option>
            </select>
        </div>
            <label>informacion del genero</label>
            <input name="infogenero" type="text" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form><?php }
}
