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
        {include file="Navs/Navpac.tpl"}
        </div>

        <div class="col 1">
        </div>

        <div class="col s5">
        <h1>Paciente</h1>
        {if isset($rol)}
            {if $rol=='registro'}
                {include file='Paciente/Registro.tpl'}
                {else if $rol=='vercita'}
                    {include file='Paciente/Vercita.tpl'}
            {/if}
        {/if}
        </div>
    </div>
{include file="templates/Cabeceras/Footer.tpl"} 