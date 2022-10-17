<h2> Seleccione  el genero previamente seleccionado y agregue informacion del mismo </h2>
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
</form>