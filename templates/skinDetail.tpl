{include file="header.tpl"}
{include file="skinslistnav.tpl"}
<main class="container-fluid mt-5">
    {foreach from=$armas item=arma} 
        {if $skin->id_arma == $arma->id_arma}
            <section class="d-flex justify-content-center">
                <div class="invisible" id="idskin">{$skin->id}</div>
                <div class="invisible" id="admin">{$admin}</div>
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
                    {if ($admin == 1)}
                        <ul class="list-group list-group-flush">
                            <form action='editskin/{$skin->id}' method='POST'>
                                <li class="list-group-item text-center">
                                    <label>Arma:</label>
                                    <select name='idarma'>
                                        <option value='{$arma->id_arma}'>{$arma->nombre}</option>
                                        <optgroup label="Pistola">
                                        {foreach from=$armas item=arma}
                                            {if $arma->tipo == 'Pistola'}
                                            <option value='{$arma->id_arma}'>{$arma->nombre}</option>
                                            {/if}
                                        {/foreach}
                                        </optgroup>
                                        <optgroup label="Subfusil">
                                        {foreach from=$armas item=arma}
                                            {if $arma->tipo == 'Subfusil'}
                                            <option value='{$arma->id_arma}'>{$arma->nombre}</option>
                                            {/if}
                                        {/foreach}
                                        </optgroup>
                                        <optgroup label="Rifle">
                                        {foreach from=$armas item=arma}   
                                            {if $arma->tipo == 'Rifle'}
                                            <option value='{$arma->id_arma}'>{$arma->nombre}</option>
                                            {/if}
                                        {/foreach}
                                        </optgroup>
                                        <optgroup label="Cuchillo">
                                        {foreach from=$armas item=arma}    
                                            {if $arma->tipo == 'Cuchillo'}
                                            <option value='{$arma->id_arma}'>{$arma->nombre}</option>
                                            {/if}
                                        {/foreach}
                                        </optgroup>
                                    </select>
                                </li>
                                <li class="list-group-item text-center">
                                    <label>Nombre del Skin:</label>
                                    <input value='{$skin->nombre}' name='nombre'>
                                </li>
                                <li class="list-group-item text-center">
                                    <label>Tipo:</label>
                                    <select name='tipo'>
                                        <option value="{$skin->tipo}">{$skin->tipo}</option>
                                        <optgroup label="Choose one">
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
                                    <label>Estado:</label>
                                    <select name='estado'>
                                        <option value="{$skin->estado}">{$skin->estado}</option>
                                        <optgroup label="Choose one">
                                        <option value='Recien Fabricado'>Recien Fabricado</option>
                                        <option value='Casi Nuevo'>Casi Nuevo</option>
                                        <option value='Algo Desgastado'>Algo Desgastado</option>
                                        <option value='Bastante Desgastado'>Bastante Desgastado</option>
                                        <option value='Deplorable'>Deplorable</option>
                                    </select>
                                    <label> | </label>
                                        <label> Stattrak:</label>
                                    <select name='stattrak'>
                                        <option value="{$skin->stattrak}">{if $skin->stattrak == 1}Si{else}No{/if}</option>
                                        <optgroup label="Choose one">
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
                                <li class="list-group-item text-center" id="valtotal"></li>
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
                            <li class="list-group-item text-center" id="valtotal"></li>
                            <li class="list-group-item text-center text-success">${$skin->precio}</li>
                        </ul>
                    {/if}         
                </div>
            </section>
        {/if}
    {/foreach}
    <section class="mt-5 w-100">
        <div class="text-center text-primary"><h4 id="comTotal"></h4></div>
        <table class="table table-striped table-dark">
            <thead class="thead-dark">
                <tr>
                    {if $admin == 1}
                    <th scope="col">RM</th>
                    {/if}
                    <th scope="col">Usuario</th>
                    <th scope="col">Valoracion</th>
                    <th scope="col">Comentario</th>
                </tr>
            </thead>
            <tbody id="commentbox">
            </tbody>
        </table>
    </section>
    
    <section class="mt-5 w-100">         
        <form id="comment-form" action="comments" method="POST" class="my-4" enctype="multipart/form-data">
            <div class="row col">
                <div class="form-group col-7 text-info text-center">
                {if $userlogin == 1}
                    <label>Comentario:</label>
                    <textarea name="comment" class="form-control" rows="3" maxlength="144"></textarea>
                {else}
                    <label>Comentario:</label>
                    <textarea name="comment" class="form-control" rows="3" disabled></textarea>
                {/if}
                </div>
                <div class="col-4">
                    <div class="form-group text-info text-center">
                    {if $userlogin == 1}
                        <label>Valoración:</label>
                        <select name="valoracion" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    {else}
                        <label>Valoración:</label>
                        <select name="valoracion" class="form-control" disabled>
                            <option value="1">1</option>
                        </select>
                    {/if}
                    </div>
                </div>
                <div class="col-6">
                    {if $userlogin == 1}
                        <param name='user' value='{$smarty.session.ID_USER}'>
                    {/if}
                </div>
                <div class='col-2'></div>
                <div class='col'>
                    {if $userlogin == 1}
                        <button type="submit" class="btn btn-primary">Enviar Comentario</button>
                    {else}
                        <button class="btn btn-info"><a href="login" class="text-warning">Iniciar Sesion</a></button>
                    {/if}
                </div>
            </div>
        </form>
    </section>
</main>
<script type="text/javascript " src="js/comments.js"></script>
{include file="footer.tpl"}