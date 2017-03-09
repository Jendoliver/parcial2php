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
    <div class="container-fluid">
        <?php include "header.php"; ?>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="list-group" style="text-align: center;">
                    <a href="altapedido.php" class="list-group-item">Dar de alta un pedido</a>
                    <a href="modificarprecio.php" class="list-group-item">Modificar el precio de un plato</a>
                    <a href="listarcocineros.php" class="list-group-item">Listar cocineros</a>
                    <a href="borrarcocinero.php" class="list-group-item">Borrar un cocinero</a>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>
</html>