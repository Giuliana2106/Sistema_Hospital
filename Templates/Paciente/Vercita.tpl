{include file="templates/Cabeceras/Header.tpl"}
<div class="row">

<div class="row">
    <div class="input-field col s12">
        <table>
            <thead>
                <tr>
                    <th>Edad</th>
                    <th>Consulta</th>
                    <th>Fecha de consulta</th>
                    <th>DPI</th>
                </tr>          
            </thead>
            <tbody>
            {if isset ($paciente)}
            {foreach from=$paciente item=$pac} 
                <tr>
                    <td>
                        {$pac['Edad']}
                    </td>
                    <td>
                        {$pac['Consulta']}
                    </td>
                    <td>
                        {$pac['Fecha']}
                    </td>
                    <td>
                        {$pac['DPI']}
                    </td>
                </tr>
            {/foreach}
            {/if}
            </tbody>
        </table>
    </div>
</div>
{include file="templates/Cabeceras/Footer.tpl"}