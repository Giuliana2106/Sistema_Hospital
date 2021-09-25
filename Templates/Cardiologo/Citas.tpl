{include file="templates/Cabeceras/header.tpl"}
<div class="navbar-fixed">

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
            <h1 class="center-align white-text">Citas</h1>
        </div>
    </div>

    <div class="row">
    
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
                    {foreach from=$citas item=$citas}
                        <tr>
                            <
                                {$citas['nombre']}
                            </td>
                            <td>
                                {$citas['Consulta  = Cardiólogo']}
                            </td>
                            <td>
                                {$citas['DPI O No.Seguro']}
                            </td>
                            <td>
                                {$citas['Fecha de consulta']}
                            </td>
                        </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
    </div>
    </div> 
    {include file="templates/Cabeceras/Footer.tpl"}