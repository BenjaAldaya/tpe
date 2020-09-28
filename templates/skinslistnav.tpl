<ul class="nav nav-tabs justify-content-center">
    <li class="nav-item">
        <a class="nav-link" href="home">All</a>
    </li>
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