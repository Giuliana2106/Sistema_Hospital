{include file="templates/Cabeceras/Header.tpl"}
<div class="card-panel cyan accent-1">         
      
      <div class="row" >
          <div class="col s8 m6">
          <div class="card blue-grey darken-1">
          </div>
          </div>
      </div>      
     


    <div class="row">

    <h4>Registrar citas</h4>
        <div class="col s8">
            <form method="post" action="?controller=Secretaria&method=RegistroCitas">
            
            <div class="input-field col s8">
            <input id="iduser" type="text" class="validate" required="" name="Usuario_idUsuario"/>
            <label for="iduser">User_idUser</label>
            </div>

            <div class="input-field col s8">
            <input id="Consulta" type="text" class="validate" required="" name="Consulta"/>
            <label for="Consulta">Consulta</label>
            </div>   

            <div class="input-field col s8">
            <input id="Edad" type="number" class="validate" required="" name="Edad"/>
            <label for="Edad">Edad</label>
            </div> 
            
            <div class="input-field col s8">
            <input id="DPI" type="number" class="validate" required="" name="DPI"/>
            <label for="DPI">DPI o Seguro</label>
            </div>

            <div class="input-field col s8">
            <input id="Fecha" type="date" class="validate" required="" name="Fecha"/>
            <label for="Fecha">Fecha de consulta</label>
            </div>
                
            <div class="input-field col s8">
            <input id="Hora" type="time" class="validate" required="" name="Hora"/>
            <label for="Hora">Hora de la consulta</label>
            </div>    


                
            <div class="row">
                <div class="input-field col s8 center-align">
                <input class="waves-effect waves-light btn" type="submit"value="Guardar Registro"/>
                </div>
            </div>
            </form>
        </div>
    </div>
</div> 
{include file="templates/Cabeceras/Footer.tpl"}