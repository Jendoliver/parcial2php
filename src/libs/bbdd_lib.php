<?php
/*
*
*   bbdd_lib.php: Funciones básicas de gestión de la bbdd
*
*/

require "error_lib.php";

function connect($database) // Todo un clásico
{
    $conexion = mysqli_connect("localhost", "root", "", $database) or
        die("No se ha podido conectar a la BBDD");
    return $conexion;
}

function disconnect($con) // Otra que tal
{
    mysqli_close($con);
}

function success() // JS popup para las consultas realizadas con éxito
{
    $message = "Operación realizada con éxito";
    echo "<script type='text/javascript'>
    alert('$message');
    window.location = '/src/index.php';
    </script>";
}

function printdiff($old, $new)
{
    if($old < $new)
    {
        $res = $new - $old;
        $message = "Plato modificado. El plato ha subido $res €.";
    }
    else
    {
        $res = $old - $new;
        $message = "Plato modificado. El plato ha bajado $res €.";
    }
    echo "<script type='text/javascript'>
    alert('$message');
    window.location = '/src/index.php';
    </script>";
}

function createTable($res) // Crea una tabla genérica automáticamente con el resultado de una query
{
    if($row = mysqli_fetch_assoc($res)) //comprobamos que hay algo para evitar warning
    {
        $table = "<table class='table table-hover'>"; // ese bootstrap
        $table .= "<thead>";
        foreach($row as $key => $value) // header tabla
        {
            switch($key)
            {
                case "dni": $table .= "<th>DNI</th>"; break;
                case "nombre": $table .= "<th>Nombre</th>"; break;
                case "apellidos": $table .= "<th>Apellidos</th>"; break;
                case "telefono": $table .= "<th>Teléfono</th>"; break;
                case "nacimiento": $table .= "<th>Fecha de nacimiento</th>"; break;
                case "contrato": $table .= "<th>Fecha de contrato</th>"; break;
                default: $table .= "<th>$key</th>";
            }
        }
        $table .= "</thead><tbody>"; // cierre del header y apertura del body
    
        do // llenar tabla con el contenido de la query
        {
            $table .= "<tr>"; // principio de fila
            foreach($row as $key => $value) // llenamos una fila
            {
                if($key == "nombre" || $key == "apellidos")
                    $value = utf8_encode($value);
                $table .= "<td>$value</td>";
            }
            $table .= "</tr>";
        } while ($row = mysqli_fetch_assoc($res));
        $table .= "</tbody></table>";
        echo $table;
    }
    else
        errorNoResults();
}