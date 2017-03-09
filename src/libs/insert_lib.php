<?php
/*
*
*   insert_lib.php: Librería de consultas INSERT
*
*/

require "select_lib.php";

function insertPedido($cliente, $plato, $cantidad)
{
    $con = connect("Catering");
    $insert = "INSERT INTO pedir(`cliente`,`plato`,`cantidad`) VALUES('$cliente', $plato, $cantidad);";
    if(mysqli_query($con, $insert))
        success();
    else
        errorQuery($con);
    disconnect($con);
}