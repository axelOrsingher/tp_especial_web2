{include file="header.tpl"}

{include file="form_serie.tpl"}

<ul class="list-group">
    {foreach from=$series item=$serie}
        <li>
            <b>{$serie->titulo}</b> -{$serie->genero} - {$serie->descripcion}- </span>
            <div class="ml-auto">
                <a href='borrarserie/{$serie->id}' type='button' class='btn btn-danger'>Borrar</a>
                <a href='editar/{$serie->id}' type='button' class='btn btn-success btn-sm'>Editar</a>
            </div>
        </li>
    {/foreach}
</ul>
{include file = "form_genero.tpl"}

<ul class="list-group">
    {foreach from=$generos item=$gen}
        <li>
        <span> <b>{$gen->id} </b> - {$gen->infogenero} </span>
            <div class="ml-auto">
                <a href='borrargenero/{$gen->id}' type='button' class='btn btn-danger'>Borrar</a>
                <a href='editargenero/{$gen->id}' type='button' class='btn btn-success btn-sm'>Editar</a>

            </div>
        </li>
    {/foreach}
</ul>


{include file="footer.tpl"}