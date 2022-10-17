{include file="header.tpl"}
{include file="serietabla.tpl"}

<table class="table">
<tbody>
{foreach from=$series item=$serie}
    <tr>
        <td>{$serie->titulo}</td> 
        <td>{$serie->genero} </td> 
        <td>{$serie->descripcion}</td>
        <td>
            <a href='ver/{$serie->id}' type='button' class='btn btn-success btn-sm'>Ver</a>
        </td>
    </tr>
{/foreach}

</tbody>
</table>
{include file="generotabla.tpl"}
<table class="table">
<tbody>
{foreach from=$generos item=$genero}
    <tr>
        <td>{$genero->id}</td> 
        <td>{$genero->infogenero} </td> 
    
        <td>
            <a href='vergenero/{$genero->id}' type='button' class='btn btn-success btn-sm'>Ver</a>
        </td>
    </tr>
{/foreach}
</tbody>
</table>