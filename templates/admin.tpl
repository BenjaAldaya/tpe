
{include file="header.tpl"}
{include file="skinslistnav.tpl"}

<div class="row">
    <div class="col-2">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link" id="v-pills-addskin-tab" data-toggle="pill" href="#v-pills-addskin" role="tab" aria-controls="v-pills-addskin" aria-selected="false">Agregar Skin</a>
            <a class="nav-link" id="v-pills-addarma-tab" data-toggle="pill" href="#v-pills-addarma" role="tab" aria-controls="v-pills-addarma" aria-selected="false">Agregar Arma</a>
            <a class="nav-link" id="v-pills-editarma-tab" data-toggle="pill" href="#v-pills-editarma" role="tab" aria-controls="v-pills-editarma" aria-selected="false">Editar Arma</a>
        </div>
    </div>
    <div class="col-9">
        <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-addskin" role="tabpanel" aria-labelledby="v-pills-addskin-tab">
                
                <form action='addskin' method="POST">
                <div class= "form-group">
                        <label>Arma</label>
                        <select name="idarma">
                            {foreach from=$armas item=arma }
                                <option value="{$arma->id_arma}">{$arma->nombre}</option>
                            {/foreach}
                        </select>
                        <label>Nombre</label>
                        <input name="nombre" type="text"> 
                        <label>Tipo</label>
                        <select name="tipo">
                            <option>Clasificado</option>
                            <option>asd1</option>
                            <option>asd2</option>
                            <option>asdd3</option>
                            <option>asd5</option>
                        </select>
                        <label>Estado</label>
                        <select name="estado">
                            <option>Clasificado</option>
                            <option>asd1</option>
                            <option>asd2</option>
                            <option>asdd3</option>
                            <option>asd5</option>
                        </select>
                        <label>Statrak</label>
                        <select name="statrak">
                            <option value="1">Si</option>
                            <option value="0">No</option>
                        </select>
                        <label>Precio</label>
                        <input name="precio">
                        <button type='submit'>Agregar Skin</button>
                    </div>
                </form>
            </div>
            <div class="tab-pane fade" id="v-pills-addarma" role="tabpanel" aria-labelledby="v-pills-addarma-tab">
                <form action='addarma' method="POST">
                    <div class= "form-group">
                        <label>Nombre</label>
                        <input name="nombre" type="text"> 
                        <label>Tipo</label>
                        <select name="tipo">
                            {foreach from=$tipo item=tipos}
                                <option value="{$tipos->tipo}">{$tipos->tipo}</option>
                            {/foreach}
                        </select>
                        <button type='submit'>Agregar Arma</button>
                    </div>
                </form>
            </div>
            <div class="tab-pane fade" id="v-pills-editarma" role="tabpanel" aria-labelledby="v-pills-editarma-tab">
                <form action='editarma' method="POST">
                    <label>Arma</label>
                    <select name="idarma">
                        {foreach from=$armas item=arma }
                            <option value="{$arma->id_arma}">{$arma->nombre}</option>
                        {/foreach}
                    </select>
                    <label>Nuevo Nombre</label>
                    <input name="nombre" type="text" value="{$arma->nombre}">
                    <label>Tipo</label>
                    <select name="tipo">
                        {foreach from=$tipo item=tipos}
                            <option value="{$tipos->tipo}">{$tipos->tipo}</option>
                        {/foreach}
                    </select>
                    <button type='submit'>Editar Arma</button> 
                </form>
            </div>
        </div>
    </div>
</div>
{include file="cardSkins.tpl"}
{include file="footer.tpl"}