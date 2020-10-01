    <ul class="nav nav-tabs justify-content-around bg-dark pb-2 pt-2">
        <li class="nav-item">
            <a class="nav-link btn btn-outline-info" href="home">All</a>
        </li>
        {foreach from=$tipo item=tipos}
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle btn btn-outline-info" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">{$tipos->tipo}</a>
            <div class="dropdown-menu">
                {foreach from=$armas item=arma}
                    {if $arma->tipo == $tipos ->tipo }
                        <a class="dropdown-item" href="armas/{$arma->tipo}/{$arma->id_arma}">{$arma->nombre}</a>
                    {/if}   
                {/foreach} 
            </div>
            </li>
        {/foreach}
        <li>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <a class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</a>
            </form>
        </li>
    </ul>