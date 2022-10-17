{include 'header.tpl'}
    <form method="POST" action="verificar">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="contraseña">contraseña</label>
                <input type="contraseña" class="form-control" id="contraseña" name="contraseña">
            </div>
        {if $error}
            <div class="alert alert-danger">
                {$error}
            </div>
        {/if}
             <button type="submit" class="btn btn-primary">Entrar</button>
     </form>

 {include file='footer.tpl'}


