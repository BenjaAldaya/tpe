{include file="header.tpl"}
{include file="skinslistnav.tpl"}
<main class="container-fluid mt-5 d-flex">
{foreach from=$skins item=skin} <!-- Recorremos el arreglo de las skins en la base de datos -->
    {foreach from=$armas item=arma} <!-- Recorremos el arreglo de las armas para encontrar la similitud con la ID -->
        {if $skin->id_arma == $arma->id_arma}
            <div class="card mr-2" style="width: 16rem;">
                <div class="card-body"> 
                    <h5 class="card-title">{$arma->nombre} | {$skin->nombre}</h5>
                </div> <!-- Creacion de la carta con sus especificaciones mas llamativas -->
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{$arma->tipo}</li>
                    <li class="list-group-item">{$skin->estado} {if $skin->stattrak == '1'}Stattrak{/if}</li>
                    <li class="list-group-item">{$skin->coleccion} {if $skin->coleccion == ''}No pertenece{/if}</li>
                    <li class="list-group-item">${$skin->precio}</li>
                </ul>
            </div> 
        {/if}
    {/foreach}                        
{/foreach} 
</main>
{include file="footer.tpl"}