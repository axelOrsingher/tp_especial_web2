<?php
/* Smarty version 4.2.1, created on 2022-10-06 17:16:59
  from 'C:\xampp\htdocs\ejemploprofe2\todo-list\templates\form_alta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633ef16b3ab785_21884215',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48103bf4963c0797756daa4a39ee02bf6672627d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ejemploprofe2\\todo-list\\templates\\form_alta.tpl',
      1 => 1665069332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_633ef16b3ab785_21884215 (Smarty_Internal_Template $_smarty_tpl) {
?><h1> Bienvenido, siga los pasos para agregar una serie </h1>
<h2>Paso 1. Agregue una serie </h2>

<form action="add" method="POST" class="my-4">
    <div class="row">
        <div class="form-group">
            <label>Título</label>
            <input name="titulo" type="text" class="form-control">
        </div>
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
        
    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
    
</form>
<h2> Seleccione  el genero previamente seleccionado y agregue informacion del mismo </h2>
<form action="addgenero" method="POST" class="my-4">
    <div class="row">
        <div class="form-group">
            <label>Genero</label>
            <input name="infogenero" type="text" class="form-control">
        </div>
    </div>
        <div class="form-group">
            <label>Genero</label>
              <select name="generos" class="form-control">
                    <option value="Drama">Drama</option>
                    <option value="Comedia">Comedia</option>
                    <option value="Accion">Accion</option>
                    <option value="Romance">Romance</option>
                    <option value="Terror">Terror</option>
                </select>
        </div>

    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
    
</form>

    <?php }
}
