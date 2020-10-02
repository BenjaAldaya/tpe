<main class="container-fluid mt-2">
    <section>
    <div class="row row-cols-4 d-flex justify-content-around mt-5">
    {if !$skins}
        <h1 class="text-center text-primary">No hay skins disponibles de esta arma</h1>
    {else}
    <!-- Recorremos el arreglo de las skins en la base de datos -->
    {foreach from=$skins item=skin} 
    <!-- Recorremos el arreglo de las armas para encontrar la similitud con la ID -->
        {foreach from=$armas item=arma} 
            {if $skin->id_arma == $arma->id_arma}
                <div class="card col-2 d-flex align-items-stretch">
                {if $skin->id_arma == 49}
                     <div class="img-holder">
                        <div class='container-img'>
                            <img src="images/ak47disruptorfantasma.png" class="card-img-top img-fluid h-75" alt="...">
                        </div>
                    </div>
                    {else}
                    <div class="img-holder">
                        <div class='container-img'>
                            <img src='images/noimage.png' class="card-img-top img-fluid" alt="...">
                        </div>
                    </div>
                {/if}
                    <div class="card-body"> 
                        <h5 class="card-title">{$arma->nombre} | {$skin->nombre}</h5>
                    </div> <!-- Creacion de la carta con sus especificaciones mas llamativas -->
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item text-center">{$arma->tipo}</li>
                    </ul>
                    <div class="card-body text-center">
                        <a href="comprar/{$skin->id}" class="btn btn-primary stretched-link w-100">Mas información</a>
                    </div>
                </div>
                
            {/if}
        {/foreach} 
        {/foreach}                  
    {/if}
    </div>
    </section>
</main>