{include file="header.tpl"}
{include file="skinslistnav.tpl"}
<main class="container-fluid mt-2 d-flex">
    <div class="row justify-content-between">
    {if !$skins}
        <h1 class="text-center">No hay skins disponibles de esta arma</h1>
    {else}
    <!-- Recorremos el arreglo de las skins en la base de datos -->
    {foreach from=$skins item=skin} 
    <!-- Recorremos el arreglo de las armas para encontrar la similitud con la ID -->
        {foreach from=$armas item=arma} 
            {if $skin->id_arma == $arma->id_arma}
                <div class="card col m-2" style="width: 16rem;">
                    <img src="images/ak47disruptorfantasma.png" class="card-img-top" alt="...">
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
    {/if}
    </div>
</main>
{include file="footer.tpl"}