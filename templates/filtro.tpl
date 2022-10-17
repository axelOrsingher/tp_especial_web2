{include file="header.tpl"}
{include file="form_filtro.tpl"}

<ul class="list-group">
    {foreach from=$gener item=$gen}
        <li>
            {$gen->titulo} - {$gen->id} -  {$gen->descripcion} - {$gen->infogenero}
        </li>
    {/foreach}
</ul>

{include file="footer.tpl"}