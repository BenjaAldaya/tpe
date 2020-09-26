
<main class="container-fluid mt-5 d-flex">
{foreach from=$skins item=skin}
       <div class="card mr-2" style="width: 16rem;">
        <div class="card-body">
            {foreach from=$armas item=arma}
                    {if $skin->id_arma == $arma->id_arma}
                         <h5 class="card-title">{$arma->nombre} | {$skin->nombre}</h5>
                    {/if}
            {/foreach}
        </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">{$skin->tipo}</li>
                <li class="list-group-item">{$skin->estado} {if $skin->stattrak == '1'}Stattrak{/if}</li>
                <li class="list-group-item">${$skin->precio}</li>
                <li class="list-group-item">{$skin->coleccion}</li>
            </ul>
    </div>                         
{/foreach} 
</main>