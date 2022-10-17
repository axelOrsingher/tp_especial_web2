<?php
/* Smarty version 4.2.1, created on 2022-10-14 18:42:52
  from 'C:\xampp\htdocs\tp especial\series\templates\form_filtro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349918c23d8a3_82267333',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90efd2b42842a7f1e9212168c63218c3c58daacb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp especial\\series\\templates\\form_filtro.tpl',
      1 => 1665765755,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6349918c23d8a3_82267333 (Smarty_Internal_Template $_smarty_tpl) {
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
