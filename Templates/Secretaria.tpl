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
    {include file="Navs/Navsc.tpl"}
    </div>

    <div class="col 1">
    </div>

    <div class="col s5">
    <h1>Secretaria</h1>
    {if isset($rol)}
        {if $rol=='registro'}
          {include file='Secretaria/Registro.tpl'}
          {else if $rol=='registrocitas'}
            {include file='Secretaria/RegistroCitas.tpl'}
               {else if $rol=='vercitas'}
                  {include file='Secretaria/Vercitas.tpl'} 
                    {else if $rol=='verregistro'}
                      {include file='Secretaria/VerRegistro.tpl'} 
                        {else if $rol=='citascardio'}
                          {include file='Secretaria/CitasCardio.tpl'}
                           {else if $rol=='citasnutricionista'}
                            {include file='Secretaria/CitasNutricio.tpl'}    
                              {else if $rol=='citaspediatra'}
                               {include file='Secretaria/CitasPediatra.tpl'}
        {/if}
    {/if}
    </div>
</div>
{include file="templates/Cabeceras/Footer.tpl"} 