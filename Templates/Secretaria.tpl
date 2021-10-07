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

    <div class="col s7">
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

</div>

<footer class="page-footer card  cyan accent-4  "><div class="card  cyan accent-4">
    <div class="container  ">
        <div class="row ">
        <div class="col l6 s12">
        <h5 class="white-text  "></h5>
        <p class="grey-text text-lighten-4"></p>
        </div>
        <div class="col l4 offset-l2 s12">
        <h5 class="white-text"></h5>
        <ul>
            <li><a class="grey-text text-lighten-3" href="#!"></a></li>
            <li><a class="grey-text text-lighten-3" href="#!"></a></li>
            <li><a class="grey-text text-lighten-3" href="#!"></a></li>
            <li><a class="grey-text text-lighten-3" href="#!"></a></li>
        </ul>
        </div>
        </div>
        </div>
        <div class="footer-copyright">
        <div class="container">
        © 2021 Copyright Health Center
        <a class="grey-text text-lighten-4 right" href="#!"></a>
    </div>
</footer>
</div> 
{include file="templates/Cabeceras/Footer.tpl"} 