{include file="templates/Cabeceras/header.tpl"}
    
    <div class="row">
        <div class="input-field col s12">
            <h4 class="center-align black-text">Ver registro de los pacientes</h4>
        </div>
    </div>

    <div class="row">
        <div class="input-field col s8">
            <table>
                <thead class="text_center">
                    <tr>
                        
                        <th>Nombre</th>
                        <th>Usuario</th>
                        <th>Password</th>
                        <th>Rol</th>
                    </tr>
                </thead>
                <tbody>
            {if isset ($secretarias)}
                    {foreach from=$secretarias item=$secretaria }
                        <tr>
                            <td>
                                {$secretaria['Nombre']}
                            </td>

                            <td>
                                 {$secretaria['Usuario']}
                            </td>

                            <td>
                                 {$secretaria['Password']}
                            </td>

                            <td>
                                  {$secretaria['Rol']}
                            </td>    
                        </tr>
                    {/foreach}
            {{/if}}        
                </tbody>
            </table>
        </div>
    </div>
{include file="templates/Cabeceras/footer.tpl"}