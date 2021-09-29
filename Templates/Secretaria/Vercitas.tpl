{include file="templates/Cabeceras/header.tpl"}
    
    <div class="row">
        <div class="input-field col s12">
            <h4 class="center-align black-text">Ver Consultas</h4>
        </div>
    </div>

    <div class="row">
        <div class="input-field col s12">
            <table>
                <thead class="text_center">
                    <tr>
                        <th>Usuario_idUsuario</th>
                        <th>Consulta</th>
                        <th>Edad</th>
                        <th>DPI o Seguro</th>
                        <th>Fecha de Consulta</th>
                        <th>Hora de la Consulta</th>

                    </tr>
                </thead>
                <tbody>
            {if isset ($secretaria)}
                    {foreach from=$secretaria item=$secretaria }
                        <tr>
                             <td>
                                {$secretaria['Usuario_idUsuario']}
                            </td>

                            <td>
                                {$secretaria['consulta']}
                            </td>

                            <td>
                                {$secretaria['edad']}
                            </td>

                            <td>
                                 {$secretaria['DPI']}
                            </td>

                            <td>
                                 {$secretaria['fecha']}
                            </td>

                            <td>
                                  {$secretaria['hora']}
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