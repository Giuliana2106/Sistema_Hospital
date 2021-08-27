
<div class="col s3">
    <nav class = "center-align cyan accent-4">Opciones</nav>
<div class="collection">
    {if $nav='Paciente'}
        <a href="?controller=DireccionNav&method=Registro" class="collection-item">Registro del pacientes</a>
        <a href="?controller=DireccionNav&method=Vercita" class="collection-item">Citas</a>
        <a href="?controller=Home&method=Inicio" class="collection-item">Salir</a>
       
    {else if $nav='Doctor'}
        <a href="?controller=DireccionNav&method=Registro" class="collection-item">Crear Registro</a>
        <a href="?controller=DireccionNav&method=Vercita" class="collection-item">Ver Cita</a>
        <a href="?controller=Home&method=Inicio" class="collection-item">Salir</a>

    {else if $nav='Secretaria'}
        <a href="?" class="collection-item">Crear Registro</a>
        <a href="?controller=DireccionNav&method=Registro" class="collection-item">Registro de pacientes</a>
        <a href="?controller=DireccionNav&method=Registro" class="collection-item">Salir</a>

    {/if}
 </div>   
</div>
