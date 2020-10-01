
{include file="header.tpl"}
{include file="skinslistnav.tpl"}

<div class="row bg-light text-dark pt-4">
    <div class="col-2">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active" id="v-pills-addskin-tab" data-toggle="pill" href="#v-pills-addskin" role="tab" aria-controls="v-pills-addskin" aria-selected="false">Agregar Skin</a>
            <a class="nav-link" id="v-pills-addarma-tab" data-toggle="pill" href="#v-pills-addarma" role="tab" aria-controls="v-pills-addarma" aria-selected="false">Agregar Arma</a>
            <a class="nav-link" id="v-pills-editarma-tab" data-toggle="pill" href="#v-pills-editarma" role="tab" aria-controls="v-pills-editarma" aria-selected="false">Editar Arma</a>
            <a class="nav-link" id="v-pills-deletearma-tab" data-toggle="pill" href="#v-pills-deletearma" role="tab" aria-controls="v-pills-deletearma" aria-selected="false">Eliminar Arma</a>
        </div>
    </div>
    <div class="col-9">
        <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-addskin" role="tabpanel" aria-labelledby="v-pills-addskin-tab">
                
                <form class="form-inline" action='addskin' method="POST">
                    <div class= "form-group">
                        <label>Arma</label>
                        <select class="form-control" name="idarma">
                            {foreach from=$armas item=arma }
                                <option value="{$arma->id_arma}">{$arma->nombre}</option>
                            {/foreach}
                        </select>
                        <label>Nombre</label>
                        <input class="form-control" name="nombre" type="text"> 
                        <label>Tipo</label>
                        <select class="form-control" name="tipo">
                            <option value="Consumidor">Consumidor</option>
                            <option value="Industrial">Industrial</option>
                            <option value="Militar">Militar</option>
                            <option value="Restringido">Restringido</option>
                            <option value="Clasificado">Clasificado</option>
                            <option value="Encubierto">Encubierto</option>
                            <option value="Contrabando">Contrabando</option>
                        </select>
                        <label>Estado</label>
                        <select class="form-control" name="estado">
                            <option value="Deplorable">Deplorable</option>
                            <option value="Bastante desgastado">Bastante desgastado</option>
                            <option value="Algo desgastado">Algo desgastado</option>
                            <option value="Casi nuevo">Casi nuevo</option>
                            <option value="Recien fabricado">Recien fabricado</option>
                        </select>
                        <label>Statrak</label>
                        <select class="form-control" name="statrak">
                            <option value="0">No</option>
                            <option value="1">Si</option>
                        </select>
                        <label>Precio</label>
                        <input class="form-control" name="precio">
                        <button class="btn btn-ligth btn-outline-dark ml-2" type='submit'>Agregar Skin</button>
                    </div>
                </form>
            </div>
            <div class="tab-pane fade" id="v-pills-addarma" role="tabpanel" aria-labelledby="v-pills-addarma-tab">
                <form class="form-inline"  action='addarma' method="POST">
                    <div class= "form-group">
                        <label>Nombre</label>
                        <input class="form-control" name="nombre" type="text"> 
                        <label>Tipo</label>
                        <select class="form-control" name="tipo">
                            {foreach from=$tipo item=tipos}
                                <option value="{$tipos->tipo}">{$tipos->tipo}</option>
                            {/foreach}
                        </select>
                        <button class="btn btn-ligth btn-outline-dark ml-2" type='submit'>Agregar Arma</button>
                    </div>
                </form>
            </div>
            <div class="tab-pane fade" id="v-pills-editarma" role="tabpanel" aria-labelledby="v-pills-editarma-tab">
                <form  class="form-inline" action='editarma' method="POST">
                    <div class= "form-group">
                        <label>Arma</label>
                        <select class="form-control" name="idarma">
                            {foreach from=$armas item=arma }
                                <option value="{$arma->id_arma}">{$arma->nombre}</option>
                            {/foreach}
                        </select>
                        <label>Nuevo Nombre</label>
                        <input class="form-control" name="nombre" type="text">
                        <label>Tipo</label>
                        <select class="form-control" name="tipo">
                            {foreach from=$tipo item=tipos}
                                <option value="{$tipos->tipo}">{$tipos->tipo}</option>
                            {/foreach}
                        </select>
                        <button class="btn btn-ligth btn-outline-dark ml-2" type='submit'>Editar Arma</button> 
                    </div>
                </form>
            </div>
            <div class="tab-pane fade" id="v-pills-deletearma" role="tabpanel" aria-labelledby="v-pills-deletearma-tab">
                <form  class="form-inline" action='deletearma' method="POST">
                    <div class= "form-group">
                        <label>Arma</label>
                        <select class="form-control" name="idarma">
                            {foreach from=$armas item=arma }
                                <option value="{$arma->id_arma}">{$arma->nombre}</option>
                            {/foreach}
                        </select>
                        <button class="btn btn-ligth btn-outline-dark ml-2" type='button' data-toggle="modal" data-target="#Modaldeletearma">Eliminar Arma</button>
                        <div class="modal fade" id="Modaldeletearma" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Esta seguro que quiere eliminar esta arma?</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Si elimina esta arma (categoria) se borraran todos los skins que pertenezcan a ella.
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                        <button type="submit" class="btn btn-primary">Eliminar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{include file="cardSkins.tpl"}
{include file="footer.tpl"}