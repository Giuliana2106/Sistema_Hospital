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

                    </tr>
                </thead>
                <tbody>
            {if isset ($cita)}
                    {foreach from=$cita item=$secre }
                        <tr>
                             <td>
                                {$secre['Usuario_idUsuario']}
                            </td>

                            <td>
                                {$secre['Consulta']}
                            </td>

                            <td>
                                {$secre['edad']}
                            </td>

                            <td>
                                 {$secre['DPI']}
                            </td>

                            <td>
                                 {$secre['Fecha']}
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