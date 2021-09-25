{include file="templates/Cabeceras/Header.tpl"}
<div class="row">
<div class="navbar-fixed">
  <nav>
    <nav class=" cyan accent-4">
      <a href="" class="brand-logo">🍏Health Center </a>
    </nav>
  </nav>
  </div>
  <br></br>
    <div class="col s5">
    {include file="Navs/Navcrd.tpl"}
    </div>

    <div class="col 1">
    </div>

    <div class="col s5">
    <h1>Cardiólogo</h1>
    {if isset($rol)}
        {if $rol=='citas'}
            {include file='Cardiologo/Citas.tpl'}
        {/if}
    {/if}
    </div>
</div>
{include file="templates/Cabeceras/Footer.tpl"} 