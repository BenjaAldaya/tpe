
<main class="container-fluid mt-5 d-flex">
{foreach from=$skins item=skin}
       <div class="card mr-2" style="width: 16rem;">
        <div class="card-body">
            <h5 class="card-title">{$skin->nombre}</h5>
        </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">{$skin->id_arma}</li>
                <li class="list-group-item">{$skin->estado} {if $skin->stattrak == '1'}Stattrak{/if}</li>
                <li class="list-group-item">${$skin->precio}</li>
            </ul>
    </div>                         
{/foreach} 
</main>