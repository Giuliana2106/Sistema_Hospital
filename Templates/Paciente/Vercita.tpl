{include file="templates/Cabeceras/header.tpl"}
<div class="navbar-fixed">
<nav>
  <nav class=" cyan accent-4">
    <a href="" class="brand-logo">🍏Health Center </a>
    
    <ul class="right hide-on-med-and-down">
      <li><a href=""></a>Salir</li>
      <li><a href=""></a></li>
    </ul>
  </nav>
</nav>
</div>
<div class="card-panel cyan accent-1">         

<div class="row">
    <div class="col s12 m6">
    <div class="card blue-grey darken-1">
    </div>
    </div>
</div>      
    <div class="row">
        <div class="input-field col s12">
            <h1 class="center-align white-text">Ver Consulta</h1>
        </div>
    </div>

    <div class="row">
        {include file='Navs/Nav.tpl'}
        <div class="col s8">
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Consulta</th>
                        <th>DPI o No. de Seguro</th>
                        <th>Fecha de Consulta</th>
                    </tr>
                </thead>
                <tbody>
                    {{foreach from=$cita item=$cita }
                        <tr>
                            <td>
                                {$cita['nombre']}
                            </td>
                            <td>
                                {$cita['Consulta']}
                            </td>
                            <td>
                                {$cita['DPI O No.Seguro']}
                            </td>
                            <td>
                                {$cita['Fecha de consulta']}
                            </td>
                        </tr>
                    {/foreach}
                </tbody>
            </table>
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
{include file="templates/Cabeceras/footer.tpl"}