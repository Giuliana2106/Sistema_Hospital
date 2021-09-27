{include file="templates/Cabeceras/Header.tpl"}
<div class="card-panel cyan accent-1">         
      
      <div class="row">
          <div class="col s12 m6">
          <div class="card blue-grey darken-1">
          </div>
          </div>
      </div>      
     
      <form method="post" action="Sala1.tpl">
      <div class="row">

      <div align="Center">
      Escriba el estado <input type="text" name= "estado">
      <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
      </button>
      </div>
      </form>

{include file="templates/Cabeceras/Footer.tpl"} 