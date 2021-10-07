
<div class="col s7">
    <nav class = "center-align cyan accent-4">Opciones</nav>
<div class="collection">

{if $nav='Secretaria'}
        <a href="?controller=DireccionesNav&method=Registro" class="collection-item">Registrar paciente</a>
        <a href="?controller=DireccionesNav&method=VerRegistros" class="collection-item">Ver registros de pacientes</a>
        <a href="?controller=DireccionesNav&method=RegistroCitas" class="collection-item">Registrar citas</a>
        <a href="?controller=DireccionesNav&method=Vercitas" class="collection-item">Ver Citas registradas</a>
        <a href="?controller=DireccionesNav&method=CitasCardio" class="collection-item">Ver citas del Cardiologo</a>
        <a href="?controller=DireccionesNav&method=CitasNutricio" class="collection-item">Ver citas de la Nutricionista</a>
        <a href="?controller=DireccionesNav&method=CitasPediatra" class="collection-item">Ver citas del Pediatra</a>
        <a href="?controller=Home&method=Inicio" class="collection-item">Salir</a>

    {/if}
 </div>   
</div>
