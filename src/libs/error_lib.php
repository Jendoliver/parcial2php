<?php
/*
*
*   error_lib.php: Gestión de errores de la aplicación
*
*/

/****** ERRORES GRAVES ******/
function errorQuery($con)
{
    echo "<h1>ERROR EN LA CONSULTA: ".mysqli_error($con)."</h1>";
}

/****** ERRORES COMUNES ******/
function errorNoClientes()
{
    echo "<h1>No hay clientes disponibles</h1>";
}

function errorNoCocineros()
{
    echo "<h1>No hay cocineros disponibles</h1>";
}

function errorNoPlatos()
{
    echo "<h1>No hay platos disponibles</h1>";
}

function errorNoResults()
{
    echo "<h1>No hay resultados</h1>";
}