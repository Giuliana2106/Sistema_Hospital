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
    {include file="Navs/Navnt.tpl"}
    </div>

    <div class="col 1">
    </div>

    <div class="col s5">
    <h1>Nutricionista</h1>
    {if isset($rol)}
        {if $rol=='citas'}
            {include file='Nutricionista/Citas.tpl'}
            {if $rol=='disponibilidad'}
              {include file='Nutricionista/Dispo.tpl'}
              {/if}
        {/if}
    {/if}
    </div>
</div>
{include file="templates/Cabeceras/Footer.tpl"} 