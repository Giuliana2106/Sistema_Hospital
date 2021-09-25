{include file="templates/Cabeceras/header.tpl"}

<div class="card-panel cyan accent-1">         

<div class="row">
    <div class="col s8 m6">
    <div class="card blue-grey darken-1">
    </div>
    </div>
</div>      
    <div class="row">
        <div class="input-field col s12">
            <h4 class="center-align white-text">Ver Consultas</h4>
        </div>
    </div>

    <div class="row">
        <div class="col s8">
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
            {if isset ($secretaria)}
                    {foreach from=$secretaria item=$secre }
                        <tr>
                            <td>
                                {$secre['Nombre']}
                            </td>

                            <td>
                                 {$secre['Usuario']}
                            </td>

                            <td>
                                 {$secre['Password']}
                            </td>

                            <td>
                                  {$secre['Rol']}
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