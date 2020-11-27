{include file="header.tpl"}
{include file="skinslistnav.tpl"}
<div class="row bg-secondary text-info border-bottom border-white">
        <div class="col-2 bg-info border-right border-primary">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active text-warning" id="v-pills-addskin-tab" data-toggle="pill" href="#v-pills-addskin" role="tab" aria-controls="v-pills-addskin" aria-selected="false">Agregar Skin</a>
                <a class="nav-link text-warning" id="v-pills-addarma-tab" data-toggle="pill" href="#v-pills-addarma" role="tab" aria-controls="v-pills-addarma" aria-selected="false">Agregar Arma</a>
                <a class="nav-link text-warning" id="v-pills-editarma-tab" data-toggle="pill" href="#v-pills-editarma" role="tab" aria-controls="v-pills-editarma" aria-selected="false">Editar Arma</a>
                <a class="nav-link text-warning" id="v-pills-deletearma-tab" data-toggle="pill" href="#v-pills-deletearma" role="tab" aria-controls="v-pills-deletearma" aria-selected="false">Eliminar Arma</a>
                <a class="nav-link text-warning" id="v-pills-changepermiso-tab" data-toggle="pill" href="#v-pills-changepermiso" role="tab" aria-controls="v-pills-changepermiso" aria-selected="false">Cambiar Permisos</a>
                <a class="nav-link text-warning" id="v-pills-deleteuser-tab" data-toggle="pill" href="#v-pills-deleteuser" role="tab" aria-controls="v-pills-deleteuser" aria-selected="false">Eliminar Usuario</a>
            </div>
        </div>
        <div class="col-10 m-auto">
            <div class="tab-content w-100" id="v-pills-tabContent">
                <!-- Agregar skin -->
                <div class="tab-pane fade show active" id="v-pills-addskin" role="tabpanel" aria-labelledby="v-pills-addskin-tab">
                    <form class="form-inline" action='addskin' method="POST">
                        <div class= "form-group w-100">
                            <div class="col-5">
                                <label>Nombre</label>
                                <input class="form-control w-100" name="nombre" placeholder="Nombre" type="text"> 
                                <label>Arma</label>
                                <select class="form-control w-100" name="idarma">
                                    {foreach from=$armas item=arma }
                                        <option value="{$arma->id_arma}">{$arma->nombre}</option>
                                    {/foreach}
                                </select>
                                <label>Tipo</label>
                                <select class="form-control w-100" name="tipo">
                                    <option value="Consumidor">Consumidor</option>
                                    <option value="Industrial">Industrial</option>
                                    <option value="Militar">Militar</option>
                                    <option value="Restringido">Restringido</option>
                                    <option value="Clasificado">Clasificado</option>
                                    <option value="Encubierto">Encubierto</option>
                                    <option value="Contrabando">Contrabando</option>
                                </select>
                            </div>  
                            <div class="col-5">  
                                <label>Estado</label>
                                <select class="form-control w-100" name="estado">
                                    <option value="Deplorable">Deplorable</option>
                                    <option value="Bastante desgastado">Bastante desgastado</option>
                                    <option value="Algo desgastado">Algo desgastado</option>
                                    <option value="Casi nuevo">Casi nuevo</option>
                                    <option value="Recien fabricado">Recien fabricado</option>
                                </select>
                                <label>Statrak</label>
                                <select class="form-control w-100" name="statrak">
                                    <option value="0">No</option>
                                    <option value="1">Si</option>
                                </select>
                                <label>Precio</label>
                                <input class="form-control w-100" name="precio">
                            </div>
                            <button class="btn btn-success ml-2" type='submit'>Agregar skin</button>
                        </div>
                    </form>
                </div>
                <!-- Agregar Arma -->
                <div class="tab-pane fade" id="v-pills-addarma" role="tabpanel" aria-labelledby="v-pills-addarma-tab">
                    <form class="form-inline"  action='addarma' method="POST">
                        <div class="form-group col">
                            <div class="col-6">
                                <label>Nombre</label>
                                <input class="form-control w-100" name="nombre" type="text"> 
                            </div>
                            <div class="col-6">
                                <label>Tipo</label>
                                <select class="form-control w-100" name="tipo">
                                    {foreach from=$tipo item=tipos}
                                        <option value="{$tipos->tipo}">{$tipos->tipo}</option>
                                    {/foreach}
                                </select>
                            </div>
                            <div class="col-12 d-flex justify-content-center mt-5">
                            <button class="btn btn-success ml-2" type='submit'>Agregar Arma</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Editar arma -->
                <div class="tab-pane fade" id="v-pills-editarma" role="tabpanel" aria-labelledby="v-pills-editarma-tab">
                    <form  class="form-inline" action='editarma' method="POST">
                        <div class="form-group col">
                            <div class="col-4">
                                <label>Arma</label>
                                <select class="form-control w-100" name="idarma">
                                    {foreach from=$armas item=arma }
                                        <option value="{$arma->id_arma}">{$arma->nombre}</option>
                                    {/foreach}
                                </select>
                            </div>
                            <div class="col-4">
                                <label>Nuevo Nombre</label>
                                <input class="form-control w-100" name="nombre" type="text">
                            </div>
                            <div class="col-4">
                                <label>Tipo</label>
                                <select class="form-control w-100" name="tipo">
                                    {foreach from=$tipo item=tipos}
                                        <option value="{$tipos->tipo}">{$tipos->tipo}</option>
                                    {/foreach}
                                </select>
                            </div>
                            <div class="col-4">
                                <label>Descripcion</label>
                                <input class="form-control w-100" name="descripcion" type="text">
                            </div>
                            <div class="col-12 d-flex justify-content-center mt-5">
                                <button class="btn btn-warning ml-2" type='submit'>Editar Arma</button>
                            </div> 
                        </div>
                    </form>
                </div>
                <!-- Eliminar Arma -->
                <div class="tab-pane fade" id="v-pills-deletearma" role="tabpanel" aria-labelledby="v-pills-deletearma-tab">
                    <form  class="form-inline" action='deletearma' method="POST">
                        <div class= "form-group col">
                            <div class="col-6">
                                <label>Arma</label>
                                <select class="form-control w-100" name="idarma">
                                    {foreach from=$armas item=arma }
                                        <option value="{$arma->id_arma}">{$arma->nombre}</option>
                                    {/foreach}
                                </select>
                            </div>
                            <div class="col-12 d-flex justify-content-center mt-5">
                                <button class="btn btn-danger ml-2" type='button' data-toggle="modal" data-target="#Modaldeletearma">Eliminar Arma</button>
                            </div>    
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
                <!-- Eliminar USUARIO-->
                <div class="tab-pane fade" id="v-pills-deleteuser" role="tabpanel" aria-labelledby="v-pills-deleteuser-tab">
                    <form  class="form-inline" action='deleteuser' method="POST">
                        <div class="form-group col">
                            <div class="col-4">
                                <label>Usuario</label>
                                <select class="form-control w-100" name="iduser">
                                    {foreach from=$users item=user}
                                        <option value="{$user->id}">{$user->usuario}</option>
                                    {/foreach}
                                </select>
                            </div>
                            <div class="col-12 d-flex justify-content-center mt-5">
                                <button class="btn btn-danger ml-2" type='button' data-toggle="modal" data-target="#Modaldeleteuser">Eliminar Usuario</button>
                            </div>    
                            <div class="modal fade" id="Modaldeleteuser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Esta seguro que quiere eliminar este usuario?</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Si elimina este usuario se borraran todos los comentarios y puntaciones que pertenezcan a el.
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
                <!-- Editar Permiso de usuario -->
                <div class="tab-pane fade" id="v-pills-changepermiso" role="tabpanel" aria-labelledby="v-pills-changepermiso-tab">
                    <form  class="form-inline" action='editpermisos' method="POST">
                        <div class= "form-group col">
                            <div class="col-4">
                                <label>Usuario</label>
                                <select class="form-control w-100" name="iduser">
                                    {foreach from=$users item=user}
                                        {if (($user->usuario != $smarty.session.USER_NAME) && ($user->usuario != 'admin'))}
                                            <option value="{$user->id}">{$user->usuario} | {if ($user->permiso == 1)} Administrador {else} Usuario {/if}</option>
                                        {/if}
                                    {/foreach}
                                </select>
                            </div>
                             <div class="col-4">
                                <label>Permisos</label>
                                <select class="form-control w-100" name="permiso">
                                        <option value="1">Administrador</option>
                                        <option value="0">Usuario</option>
                                </select>
                            </div>
                             <div class="col-12 d-flex justify-content-center mt-5">
                                <button class="btn btn-warning ml-2" type='submit'>Editar permisos</button>
                            </div> 
                        </div>
                    </form>
                </div>
            </div>
        </div> 
</div>
{include file="cardSkins.tpl"}
<div class="row">
<div class='mx-auto'
<nav aria-label="Page navigation example">
  <ul class="pagination">
    {* <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li> *}
    <li class="page-item"><a class="page-link" href="admin/1">1</a></li>
    <li class="page-item"><a class="page-link" href="admin/2">2</a></li>
    <li class="page-item"><a class="page-link" href="admin/3">3</a></li>
    {* <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li> *}
  </ul>
</nav>
</div>
{include file="footer.tpl"}