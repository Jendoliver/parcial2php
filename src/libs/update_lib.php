<?php
/*
*
*   update_lib.php: Librería de funciones UPDATE
*
*/

require "insert_lib.php";

function updatePrecioPlato($idplato, $precio)
{
    $con = connect("Catering");
    $precioantiguo = selectPrecioPlato($idplato);
    $query = "UPDATE plato SET precio = $precio WHERE idplato = $idplato;";
    if(mysqli_query($con, $query))
    {
        $precionuevo = selectPrecioPlato($idplato);
        printdiff($precioantiguo, $precionuevo);
    }
    else
        errorQuery($con);
    disconnect($con);
}