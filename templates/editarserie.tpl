{include 'header.tpl'}

<form action="actualizar/{$series->id}" method="POST" class="my-4">
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
        
    <button type="submit" class="btn btn-primary mt-2">editar</button>
    
</form>

{include file="footer.tpl"}