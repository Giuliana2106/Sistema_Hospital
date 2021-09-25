{include file="templates/Cabeceras/Header.tpl"}

<div class="navbar-fixed">
      <nav>
        <nav class=" cyan accent-4">
          <a href="" class="brand-logo">🍏Health Center </a>

          <ul class="right hide-on-med-and-down">
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
          </ul>
        </nav>
      </nav>
    </div>

<div class="card-panel cyan accent-3">         
    <div class="container">
    <div class="row">
        <div class="col s12 m6">
        <div class="card blue-grey darken-1">
        </div>
        </div>
    </div>      
    <div>
        <h1 class="center-align white-text text- ">Bienvenidos</h1>

        <h5 class="center-align white-text text- ">Ingresa los siguientes datos</h5>
    </div>

        <form method="post" action="?controller=User&method=BuscarUsuario">
            <div class="row">
                <div class="input-field col s6">
                <input name="nombre" id="first_name2" type="text" class="validate">
                <label class="active" for="first_name2">Usuario</label>
                </div>

                <div class="input-field col s6">
                <input name="pass" id="first_name3" type="password" class="validate">
                <label class="active" for="first_name3">Contraseña</label>
                </div>
            </div>   

            <div align="center">
            <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
            <i class="material-icons right">send</i>
            </button>
         </div>
        </form>
    </div>

</div>

<footer class="page-footer card  cyan accent-4  "><div class="card  cyan accent-4">
    <div class="container  ">
        <div class="row ">
        <div class="col l6 s12">
        <h5 class="white-text  "></h5>
        <p class="grey-text text-lighten-4"></p>
        </div>
        <div class="col l4 offset-l2 s12">
        <h5 class="white-text"></h5>
        <ul>
            <li><a class="grey-text text-lighten-3" href="#!"></a></li>
            <li><a class="grey-text text-lighten-3" href="#!"></a></li>
            <li><a class="grey-text text-lighten-3" href="#!"></a></li>
            <li><a class="grey-text text-lighten-3" href="#!"></a></li>
        </ul>
        </div>
        </div>
        </div>
        <div class="footer-copyright">
        <div class="container">
        © 2021 Copyright Health Center
        <a class="grey-text text-lighten-4 right" href="#!"></a>
    </div>
</footer>
</div> 

{include file="templates/Cabeceras/Footer.tpl"} 
