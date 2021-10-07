{include file="templates/Cabeceras/Header.tpl"}
<div class="card-panel cyan accent-1">         
      
      <div class="row" >
          <div class="col s12 m6">
          <div class="card blue-grey darken-1">
          </div>
          </div>
      </div>      
     

<div class="row" align="center">
<h4>Registrar citas</h4>
    <div class="col s12">
        <form method="post" action="?controller=Secretaria&method=RegistroCitas" class="s8">
        
        <div class="input-field col s12">
        <input id="iduser" type="text" class="validate" required="" name="Usuario_idUsuario"/>
        <label for="iduser">User_idUser</label>
        </div>

        <div class="input-field col s12">
        <input id="Consulta" type="text" class="validate" required="" name="Consulta"/>
        <label for="Consulta">Consulta</label>
        </div>   

        <div class="input-field col s12">
        <input id="Edad" type="number" class="validate" required="" name="Edad"/>
        <label for="Edad">Edad</label>
        </div> 
            
        <div class="input-field col s12">
        <input id="Fecha" type="date" class="validate" required="" name="Fecha"/>
        <label for="Fecha">Fecha de consulta</label>
        </div> 

            
        <div class="row">
            <div class="input-field col s12 center-align">
            <input class="waves-effect waves-light btn" type="submit"value="Guardar Registro"/>
            </div>
        </div>
        </form>
    </div>
</div>
</div> 
{include file="templates/Cabeceras/Footer.tpl"}