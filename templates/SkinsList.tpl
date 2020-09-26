{include file="header.tpl"}

    <main class='container-fluid'>
            <div class='row'>
                <div class='dropdown'>
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Pistolas
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        {foreach from=$armas item=arma}
                            {if $arma->id_tipo == 3}
                                <a class="dropdown-item" href="#">{$arma->nombre}</a>
                            {/if}   
                        {/foreach} 
                    </div>
                </div>
                <div class='dropdown'>
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Rifles
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        {foreach from=$armas item=arma}
                            {if $arma->id_tipo == 4}
                                <a class="dropdown-item" href="#">{$arma->nombre}</a>
                            {/if}   
                        {/foreach} 
                    </div>
                </div>
                <div class='dropdown'>
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Subfusiles
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        {foreach from=$armas item=arma}
                            {if $arma->id_tipo == 5}
                                <a class="dropdown-item" href="#">{$arma->nombre}</a>
                            {/if}   
                        {/foreach} 
                    </div>
                </div>
                <div class='dropdown'>
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Armas Pesadas
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        {foreach from=$armas item=arma}
                            {if $arma->id_tipo == 2}
                                <a class="dropdown-item" href="#">{$arma->nombre}</a>
                            {/if}   
                        {/foreach} 
                    </div>
                </div>
                <div class='dropdown'>
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Cuchillos
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        {foreach from=$armas item=arma}
                            {if $arma->id_tipo == 1}
                                <a class="dropdown-item" href="#">{$arma->nombre}</a>
                            {/if}   
                        {/foreach} 
                    </div>
                </div>  
            </div>
       
        {* <form class='container'>
            <div class=f orm-row>
                <button>All</button>               
                <select>
                    <Option selected>Pistolas</Option>
                    {foreach from=$armas item=arma}
                        {if $arma->id_tipo == 3}
                            <Option>{$arma->nombre}</Option>  
                        {/if}    
                    {/foreach}                             
                </select>
                <select>
                    <Option selected>Subfusiles</Option>
                    <Option value="1">MP5-SD</Option>
                    <Option value="2">MP7</Option>
                    <Option value="3">UMP-45</Option>
                    <Option value="4">P90</Option>
                    <Option value="5">PP-Bizon</Option>
                    <Option value="6">MP9</Option>
                    <Option value="7">MAC-10</Option>
                </select>
                <select>
                    <Option selected>Armas pesadas</Option>
                    <Option value="1">Nova</Option>
                    <Option value="2">XM1014</Option>
                    <Option value="3">Recortada</Option>
                    <Option value="4">MAG-7</Option>
                    <Option value="5">M249</Option>
                    <Option value="6">Negev</Option>
                </select>
                <select>
                    <Option selected>Rifles de asalto</Option>
                    <Option value="1">AK-47</Option>
                    <Option value="2">M4-A4</Option>
                    <Option value="3">SSG 08</Option>
                    <Option value="4">SSG 553</Option>
                    <Option value="5">AUG</Option>
                    <Option value="6">AWP</Option>
                    <Option value="7">G3SG1</Option>
                    <Option value="8">SCAR 20</Option>
                    <Option value="9">FAMAS</Option>
                    <Option value="10">Galil AR</Option>
                </select>
                <select>
                    <Option selected>Cuchillos</Option>
                    <Option value="1">Bayoneta</Option>
                    <Option value="2">Bayoneta M9</Option>
                    <Option value="3">Alfanje</Option>
                    <Option value="4">Bowie</Option>
                    <Option value="5">Clásico</Option>
                    <Option value="6">Supervivencia</Option>
                    <Option value="7">Cazador</Option>
                    <Option value="8">Destripador</Option>
                    <Option value="9">Encordado</Option>
                    <Option value="10">Esqueletizado</Option>
                    <Option value="11">Mariposa</Option>
                    <Option value="12">Nómada</Option>
                    <Option value="13">Plegable</Option>
                    <Option value="14">Talón</Option>
                    <Option value="15">Ursus</Option>
                    <Option value="14">Dagas Sombrias</Option>
                    <Option value="15">Karambit</Option>
                </select>
            </div>
        </form> *}
    </main>

    {include file="footer.tpl"}

