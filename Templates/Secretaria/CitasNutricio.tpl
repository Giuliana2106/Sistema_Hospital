{include file="templates/Cabeceras/header.tpl"}

<div class="card-panel cyan accent-1">         

<div class="row">
    <div class="col s12 m6">
    <div class="card blue-grey darken-1">
    </div>
    </div>
</div>      
    <div class="row">
        <div class="input-field col s12">
            <h4 class="center-align black-text">Ver Citas de Nutricionista</h4>
        </div>
    </div>

    <div class="row">
        <div class="col s12">
            <table>
                <thead>
                    <tr>
                        <th>Usuario_idUsuario</th>
                        <th>Consulta</th>
                        <th>Edad</th>
                        <th>Fecha de Consulta</th>
                        <th>Hora de la Consulta</th>

                    </tr>
                </thead>
                <tbody>
            {if isset ($secretaria)}
                    {foreach from=$secretaria item=$secre }
                        <tr>
                             <td>
                                {$secre['Usuario_idUsuario']}
                            </td>

                            <td>
                                {$secre['consulta']}
                            </td>

                            <td>
                                 {$secre['edad']}
                            </td>

                            <td>
                                 {$secre['fecha']}
                            </td>

                            <td>
                                  {$secre['hora']}
                            </td>    
                        </tr>
                    {/foreach}
            {{/if}}        
                </tbody>
            </table>
        </div>
    </div>
    
</div>
{include file="templates/Cabeceras/footer.tpl"}