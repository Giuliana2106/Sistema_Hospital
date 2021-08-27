{include file="templates/Cabeceras/Header.tpl"}
<div class="card-panel cyan accent-1">         
      
      <div class="row">
          <div class="col s12 m6">
          <div class="card blue-grey darken-1">
          </div>
          </div>
      </div>      
     

<div class="row">

    <div class="col s8">
        <form method="post" action="?class=Inventario$method=IngresoInventario">
            <div class="input-field col s8">
             <input id="nombre" type="text" name="nombre"/>
             <label for="nombre">Nombre del paciente</label>
            </div>

            <div class="input-field col s8">
            <input id="nombre" type="text" name="Consulta"/>
            <label for="nombre">Consulta</label>
           </div>


            <div class="input-field col s8">
                 <input id="edad" type="number" name="edad"/>
                 <label for="edad">Edad</label>
            </div>

            <div class="input-field col s8">
            <input id="cantidad" type="number" name="DPI"/>
            <label for="DPI">DPI o No. de Seguro</label>
            </div>
            

             <div class="input-field col s8">
                 <input id="fecha" type="date" name="fecha"/>
                  <label for="fecha">Fecha de Consulta</label>
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