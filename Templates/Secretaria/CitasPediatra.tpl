{include file="templates/Cabeceras/header.tpl"}       
    <div class="row">
        <div class="input-field col s12">
            <h4 class="center-align black-text">Ver citas de pediatra</h4>
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
                        <th>DPI</th>
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
                                {$secre['DPI']}
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
{include file="templates/Cabeceras/footer.tpl"}