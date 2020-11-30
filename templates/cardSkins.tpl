<main class="container-fluid mt-2 fondonuke">
    <section>
    <div class="row  p-5 d-flex justify-content-around m-5 row-cols-4">
        <!-- Recorremos el arreglo de las skins en la base de datos -->
        {foreach from=$skins item=skin} 
            <!-- Recorremos el arreglo de las armas para encontrar la similitud con la ID -->
            {foreach from=$armas item=arma} 
                {if $skin->id_arma == $arma->id_arma}
                    <div class="card p-2 col-2 m-5 d-flex ">
                        {if $skin->imagen != ''}
                            <div class="img-holder">
                                <div class='container-img'>
                                    <img src="{$skin->imagen}" class="card-img-top img-fluid h-75" alt="...">
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
                        {if $admin == 1}
                            <div class="row p-3">
                                <a href="comprar/{$skin->id}" class="btn btn-primary w-100 ">Mas información</a>
                                <a href="editar/{$skin->id}" class="btn btn-warning w-50 mt-1 border">Editar</a>
                                <a  class="btn btn-danger w-50 mt-1 border" data-toggle="modal" data-target="#Modaldeleteskin">Eliminar</a>
                            </div>
                            <div class="modal fade" id="Modaldeleteskin" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Esta seguro que quiere eliminar esta arma?</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Si elimina esta Skin se borraran todos los comentarios que pertenezcan a ella.
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary col-5 m-1" data-dismiss="modal">Cerrar</button>
                                            <a href="deleteskin/{$skin->id}" class="btn btn-danger w-50 m-1 col-5">Eliminar</a>
                                        </div>
                                    </div>
                                </div>
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
