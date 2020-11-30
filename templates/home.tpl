{include file="header.tpl"}
{include file="skinslistnav.tpl"}
{include file="cardSkins.tpl"}
<div class="row">
  <div class='mx-auto'>
    <nav aria-label="Page navigation example">
      <ul class="pagination">
        
        {if $filtrer==0}
          {if $page > 1}
            <li class="page-item"><a class="page-link" href="home/{$page-1}"><span>&laquo;</span></a></li>
          {else}
            <li class="page-item disabled"><a class="page-link" href="home/{$page-1}" ><span>&laquo;</span></a></li>
          {/if}
          <li class="page-item">
            <a class="page-link" href="home/{$page+1}"><span>&raquo;</span></a>
          </li>
        {else}
          {if $page > 1}
            <li class="page-item"><a class="page-link" href="armas/{$acttipo}/{$actid}/{$page-1}"><span>&laquo;</span></a></li>
          {else}
            <li class="page-item disabled"><a class="page-link" href="home/{$page-1}" ><span>&laquo;</span></a></li>
          {/if}
            <li class="page-item"><a class="page-link" href="armas/{$acttipo}/{$actid}/{$page+1}"><span>&raquo;</span></a></li>
        {/if}
      </ul>
    </nav>
  </div>
</div>
{include file="footer.tpl"}