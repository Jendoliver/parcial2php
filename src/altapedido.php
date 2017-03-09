<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>STUCOCINA!</title>
</head>
<body>
    <?php 
    if(!empty($_POST))
    {
        require "libs/insert_lib.php";
        extract($_POST);
        insertPedido($cliente, $plato, $cantidad);
    }
    else
    { require "libs/select_lib.php";
    ?>
    <div class="container-fluid">
        <?php include "header.php"; ?>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h2>Dar de alta un pedido</h2>
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="cliente">Cliente:</label>
                        <select class="form-control" name="cliente">
                           <?php selectClientes(); ?> 
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="plato">Plato:</label>
                        <select class="form-control" name="plato">
                            <?php selectPlatos(0); ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="cantidad">Cantidad:</label>
                        <input type="number" class="form-control" name="cantidad">
                    </div>
                    <button type="submit" class="btn btn-success">Dar de alta plato</button>
                </form>
            </div>
        </div>
    </div>
    <?php } ?>
</body>
</html>