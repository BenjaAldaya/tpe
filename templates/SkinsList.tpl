{include file="header.tpl"}

    <section class='container-fluid'>
            <div class='row '>
                <div class='dropdown '>
                    <a class="btn btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <a class="btn btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <a class="btn btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

    </section>
    {include file="cardSkins.tpl"}
    {include file="footer.tpl"}

