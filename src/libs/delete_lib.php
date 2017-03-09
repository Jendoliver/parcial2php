<?php
/*
*
*   delete_lib.php: Librería de funciones DELETE
*
*/

require "update_lib.php";

function deleteCocinero($dni)
{
    $con = connect("Catering");
    $delete = "DELETE FROM cocinero WHERE dni = '$dni'";
    if(mysqli_query($con, $delete))
        success();
    else
        errorQuery($con);
    disconnect($con);
}