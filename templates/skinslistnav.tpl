{include file="header.tpl"}
<ul class="nav nav-tabs justify-content-center">
{foreach from=$tipo item=tipos}
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">{$tipos->tipo}</a>
    <div class="dropdown-menu">
        {foreach from=$armas item=arma}
            {if $arma->tipo == $tipos ->tipo }
                <a class="dropdown-item" href="armas/{$arma->tipo}/{$arma->id_arma}">{$arma->nombre}</a>
            {/if}   
        {/foreach} 
    </div>
    </li>
{/foreach}
</ul>
{include file="cardSkins.tpl"}
{include file="footer.tpl"}