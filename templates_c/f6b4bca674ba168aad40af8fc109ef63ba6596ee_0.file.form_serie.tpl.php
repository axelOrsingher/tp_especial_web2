<?php
/* Smarty version 4.2.1, created on 2022-10-14 00:43:00
  from 'C:\xampp\htdocs\tp especial\series\templates\form_serie.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634894748c4cf6_80313865',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6b4bca674ba168aad40af8fc109ef63ba6596ee' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp especial\\series\\templates\\form_serie.tpl',
      1 => 1665700234,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634894748c4cf6_80313865 (Smarty_Internal_Template $_smarty_tpl) {
?><h1> Bienvenido, siga los pasos para agregar una serie </h1>
<h2>Paso 1. Agregue una serie </h2>

<form action="agregar" method="POST" class="my-4">
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
