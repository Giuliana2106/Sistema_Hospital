{include file="templates/Cabeceras/Header.tpl"}
<div class="card-panel cyan accent-1">         
      
      <div class="row">
          <div class="col s12 m6">
          <div class="card blue-grey darken-1">
          </div>
          </div>
      </div>      
     


<div class="row">

    <h4>Registro de usuarios</h4>
        <div class="col s8">
            <form method="post" action="?controller=Secretaria&method=RegistroUsuario">
        

             <div class="input-field col s8">
            <input id="Nombre" type="text" class="validate" required="" name="Nombre"/>
            <label for="Nombre">Nombre</label>
            </div>   

            <div class="input-field col 8">
            <input id="User" type="text" class="validate" required="" name="User"/>
            <label for="User">Usuario</label>
            </div>  

            <div class="input-field col s8">
            <input id="Password" type="password" class="validate" required="" name="Pass"/>
            <label for="Password">Password</label>
            </div> 

            <div class="row">
                 <div class="input-field col s8">
                 <label for="rol">Rol</label></nav><br></br>
                <select class="browser-default" name="rol">
                    {foreach from=$NombreRol item=$nr}
                    <option value="{$nr['idRol']}">{$nr['Nombre']}</option>
                    {/foreach}
                </select>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s8">
                <input class="btn waves-effect waves-light" type="submit" name="action"/>
                </div>
            </div>
        </form>
    </div>
</div>
</div> 
{include file="templates/Cabeceras/Footer.tpl"}