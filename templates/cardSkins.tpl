<main class="container-fluid mt-2 fondonuke">
    <section>
    <div class="row row-cols-4 d-flex justify-content-around mt-5">
        <!-- Recorremos el arreglo de las skins en la base de datos -->
        {foreach from=$skins item=skin} 
            <!-- Recorremos el arreglo de las armas para encontrar la similitud con la ID -->
            {foreach from=$armas item=arma} 
                {if $skin->id_arma == $arma->id_arma}
                    <div class="card col-2 d-flex ">
                        {if $arma->photo == 1}
                            <div class="img-holder">
                                <div class='container-img'>
                                    <img src="images/{$skin->id_arma}.png" class="card-img-top img-fluid h-75" alt="...">
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
                        {if (isset($smarty.session.USER_NAME)) && ($smarty.session.PERMISOS == 3) && $admin == 1}
                            <div class="row">
                                <a href="comprar/{$skin->id}" class="btn btn-primary w-100">Mas información</a>
                                <a href="editar/{$skin->id}" class="btn btn-warning w-50">Editar</a>
                                <a href="deleteskin/{$skin->id}" class="btn btn-danger w-50">Eliminar</a>
                            </div>
                        {else}
                            <div class="card-body text-center">
                                <a href="comprar/{$skin->id}" class="btn btn-primary w-100">Mas información</a>
                            </div>
                        {/if}
                    </div>    
                {/if}
            {/foreach} 
        {/foreach}                  
    </div>
    </section>
</main>