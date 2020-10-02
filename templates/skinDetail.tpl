{include file="header.tpl"}
{include file="skinslistnav.tpl"}
    <main class="container-fluid mt-5">
    {foreach from=$skins item=skin}
        {foreach from=$armas item=arma} 
            {if $skin->id_arma == $arma->id_arma}
            <section class="col row">
                <div class="col-6">
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
                </div>
                <div class="card col-6">
                <!-- Creacion de la carta con sus especificaciones mas llamativas -->
                    <div class="card-body"> 
                        <h5 class="card-title text-center">{$arma->nombre} | {$skin->nombre}</h5>
                        <p class="card-text text-center">{$arma->descripcion}</p>
                    </div>
                        <ul class="list-group list-group-flush">
                                <li class="list-group-item text-center">{$arma->tipo}</li>
                                <li class="list-group-item text-center">{$skin->estado}{if $skin->stattrak == '1'} | Stattrak{/if}</li>
                                <li class="list-group-item text-center">{$skin->coleccion} {if $skin->coleccion == ''}No pertenece a ninguna coleccion{/if}</li>
                                <li class="list-group-item text-center text-success">${$skin->precio}</li>
                        </ul>        
                </div>
                </div>
            </section>
            {/if}
        {/foreach} 
    {/foreach}  
    </main>
{include file="footer.tpl"}