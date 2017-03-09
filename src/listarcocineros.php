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
    <?php require "libs/select_lib.php"; ?>
    <div class="container-fluid">
        <?php include "header.php"; ?>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h2>Listado de cocineros</h2>
                <div class="container-fluid">
                    <?php selectCocinerosTable(); ?>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>
</html>