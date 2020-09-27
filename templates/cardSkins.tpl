
<main class="container-fluid mt-5 d-flex">
{foreach from=$skins item=skin}
    {foreach from=$armas item=arma}
        {if $skin->id_arma == $arma->id_arma}
            <div class="card mr-2" style="width: 16rem;">
                <div class="card-body">
                    <h5 class="card-title">{$arma->nombre} | {$skin->nombre}</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{$arma->tipo}</li>
                    <li class="list-group-item">{$skin->estado} {if $skin->stattrak == '1'}Stattrak{/if}</li>
                    <li class="list-group-item">${$skin->precio}</li>
                    <li class="list-group-item">{$skin->coleccion}</li>
                </ul>
            </div> 
        {/if}
    {/foreach}                        
{/foreach} 
</main>