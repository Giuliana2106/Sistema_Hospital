{include file="templates/Cabeceras/Header.tpl"}
<div class="card-panel cyan accent-1">         
      
      <div class="row" align="left">
          <div class="col s12 m6">
          <div class="card blue-grey darken-1">
          </div>
          </div>
      </div>      
     

<div class="row" align="center">
<h4>Registro de pacientes</h4>
    <div class="col s12">
        <form method="post" action="?controller=Secretaria&method=Registro">
        

        <div class="input-field col s12">
        <input id="Nombre" type="text" class="validate" required="" name="nombre"/>
        <label for="Nombre">Nombre</label>
        </div>   

        <div class="input-field col s12">
        <input id="User" type="text" class="validate" required="" name="user"/>
        <label for="User">Usuario</label>
        </div>  

        <div class="input-field col s12">
        <input id="Password" type="password" class="validate" required="" name="pass"/>
        <label for="Password">Password</label>
        </div> 

        <div class="row">
            <div class="input-field col s12">
            <input class="btn waves-effect waves-light" type="submit" name="action"/>
            </div>
        </div>
        </form>
    </div>
</div>
</div> 
{include file="templates/Cabeceras/Footer.tpl"}