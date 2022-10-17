<?php
/* Smarty version 4.2.1, created on 2022-10-08 16:28:19
  from 'C:\xampp\htdocs\tp especial\series\templates\form_alta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63418903e7e9d4_81765386',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5086d35e704d440d325115354c68f127050be0b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp especial\\series\\templates\\form_alta.tpl',
      1 => 1665238937,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63418903e7e9d4_81765386 (Smarty_Internal_Template $_smarty_tpl) {
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

    <?php }
}
