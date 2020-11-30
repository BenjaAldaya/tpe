{include file="header.tpl"}
{include file="skinslistnav.tpl"}
{include file="cardSkins.tpl"}
<div class="row">
  <div class='mx-auto'>
    <nav aria-label="Page navigation example">
      <ul class="pagination">
        {* <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
          </a>
        </li> *}
        {if $filtrer==0}
          <li class="page-item"><a class="page-link" href="home/1">1</a></li>
          <li class="page-item"><a class="page-link" href="home/2">2</a></li>
          <li class="page-item"><a class="page-link" href="home/3">3</a></li>
          {else}
          <li class="page-item"><a class="page-link" href="armas/{$acttipo}/{$actid}/1">1</a></li>
          <li class="page-item"><a class="page-link" href="armas/{$acttipo}/{$actid}/2">2</a></li>
          <li class="page-item"><a class="page-link" href="armas/{$acttipo}/{$actid}/3">3</a></li>
          {/if}
        {* <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
          </a>
        </li> *}
      </ul>
    </nav>
  </div>
</div>
{include file="footer.tpl"}