{include file="header.tpl"}
{include file="skinslistnav.tpl"}
<main class="container-fluid mt-5">
    {foreach from=$armas item=arma} 
        {if $skin->id_arma == $arma->id_arma}
            <section class="d-flex justify-content-center">
                <div class="col-5">
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
                </div>
                <div class="card col-5">
                    <!-- Creacion de la carta con sus especificaciones mas llamativas -->
                    <div class="card-body"> 
                        <h5 class="card-title text-center">{$arma->nombre} | {$skin->nombre}</h5>
                        <p class="card-text text-center">{$arma->descripcion}</p>
                    </div>
                    {if (isset($smarty.session.USER_NAME)) && ($smarty.session.PERMISOS == 3) && ($admin == 1)}
                        <ul class="list-group list-group-flush">
                            <form action='editskin/{$skin->id}' method='POST'>
                                <li class="list-group-item text-center">
                                    <label>{$arma->nombre} a:</label>
                                    <select name='idarma'>
                                        {foreach from=$armas item=arma}
                                            <option value='{$arma->id_arma}'>{$arma->nombre}</option>
                                        {/foreach}
                                    </select>
                                </li>
                                <li class="list-group-item text-center">
                                    <label>Nombre del Skin:</label>
                                    <input value='{$skin->nombre}' name='nombre'>
                                </li>
                                <li class="list-group-item text-center">
                                    <label> {$skin->tipo} a: </label>
                                    <select name='tipo'>
                                        <option value='Consumidor'>Consumidor</option>
                                        <option value='Militar'>Militar</option>
                                        <option value='Indrustrial'>Indrustrial</option>
                                        <option value='Restringido'>Restringido</option>
                                        <option value='Clasificado'>Clasificado</option>
                                        <option value='Encubierto'>Encubierto</option>
                                        <option value='Contrabando'>Contrabando</option>
                                    </select>
                                </li>
                                <li class="list-group-item text-center">
                                    <label>{$skin->estado} a:</label>
                                    <select name='estado'>
                                        <option value='Recien Fabricado'>Recien Fabricado</option>
                                        <option value='Casi Nuevo'>Casi Nuevo</option>
                                        <option value='Algo Desgastado'>Algo Desgastado</option>
                                        <option value='Bastante Desgastado'>Bastante Desgastado</option>
                                        <option value='Deplorable'>Deplorable</option>
                                    </select>
                                    <label>|</label>
                                    {if $skin->stattrak == 1}
                                        <label> Stattrak Si a: </label>
                                    {else}
                                        <label> Stattrak No a: </label>
                                    {/if}
                                    <select name='stattrak'>
                                        <option value='1'>Si</option>
                                        <option value='0'>No</option>
                                    </select>
                                </li>
                                <li class="list-group-item text-center">
                                    <label>Coleccion:</label>
                                    {if $skin->coleccion !=''}
                                    <input value='{$skin->coleccion}' name='coleccion'>
                                    {else}
                                    <input value='Vacio' name='coleccion'>    
                                    {/if}
                                </li>
                                <li class="list-group-item text-center">
                                    <label>Precio: $</label>
                                    <input value='{$skin->precio}' name='precio'>
                                </li>
                                <li class="list-group-item text-center text-success">
                                    <button type='submit' class="btn btn-primary w-100">Confirmar edicion</button>
                                </li>
                            </form>
                        </ul>
                        {else}
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item text-center">{$arma->tipo}</li>
                            <li class="list-group-item text-center">{$skin->tipo}</li>
                            <li class="list-group-item text-center">{$skin->estado}{if $skin->stattrak == '1'} | Stattrak{/if}</li>
                            <li class="list-group-item text-center">{$skin->coleccion} {if $skin->coleccion == ''}No pertenece a ninguna coleccion{/if}</li>
                            <li class="list-group-item text-center text-success">${$skin->precio}</li>
                        </ul>
                    {/if}         
                </div>
            </section>
        {/if}
    {/foreach}  
</main>
{include file="footer.tpl"}