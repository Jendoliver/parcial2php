<?php
/*
*
*   select_lib.php: Librería de consultas SELECT
*
*/

require "bbdd_lib.php";

function selectClientes()
{
    $con = connect("Catering");
    $select = "SELECT nif, nombre, apellidos
                FROM cliente;";
    if($res = mysqli_query($con, $select))
    {
        $options = "";
        if($row = mysqli_fetch_assoc($res))
        {
            do
            {
                extract($row);
                $nombre = utf8_encode($nombre);
                $apellidos = utf8_encode($apellidos);
                $options .= "<option value='$nif'>$nombre $apellidos</option>";
            } while($row = mysqli_fetch_assoc($res));
            echo $options;
        }
        else
            errorNoClientes();
    }
    else
        errorQuery($con);
    disconnect($con);
}

function selectPlatos($prec) // $prec = 0: sin precio, else con precio
{
    $con = connect("Catering");
    $select = "SELECT idplato, nombre, precio
                FROM plato;";
    if($res = mysqli_query($con, $select))
    {
        $options = "";
        if($row = mysqli_fetch_assoc($res))
        {
            do
            {
                extract($row);
                $nombre = utf8_encode($nombre);
                if($prec) $options .= "<option value='$idplato'>$nombre $precio €</option>";
                else $options .= "<option value='$idplato'>$nombre</option>";
            } while($row = mysqli_fetch_assoc($res));
            echo $options;
        }
        else
            errorNoPlatos();
    }
    else
        errorQuery($con);
    disconnect($con);
}

function selectPrecioPlato($idplato)
{
    $con = connect("Catering");
    $select = "SELECT precio
                FROM plato
                WHERE idplato = $idplato;";
    if($res = mysqli_query($con, $select))
    {
        if($row = mysqli_fetch_assoc($res))
        {
            disconnect($con);
            return $row["precio"];
        }
        else
            errorNoPlatos();
    }
    else
        errorQuery($con);
    disconnect($con);
}

function selectCocineros()
{
    $con = connect("Catering");
    $select = "SELECT dni, nombre, apellidos
                FROM cocinero;";
    if($res = mysqli_query($con, $select))
    {
        $options = "";
        if($row = mysqli_fetch_assoc($res))
        {
            do
            {
                extract($row);
                $nombre = utf8_encode($nombre);
                $apellidos = utf8_encode($apellidos);
                $options .= "<option value='$dni'>$nombre $apellidos</option>";
            } while($row = mysqli_fetch_assoc($res));
            echo $options;
        }
        else
            errorNoCocineros();
    }
    else
        errorQuery($con);
    disconnect($con);
}

function selectCocinerosTable()
{
    $con = connect("Catering");
    if($res = mysqli_query($con, "SELECT * FROM cocinero ORDER BY contrato DESC, apellidos ASC, nombre ASC;"))
        createTable($res);
    else
        errorQuery($con);
    disconnect($con);
}