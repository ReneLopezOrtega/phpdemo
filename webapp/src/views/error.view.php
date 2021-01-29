<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>PAGINA DE ERROR</title>
</head>
<body class="bg-dark">
    <div class="card w-25 mx-auto text-center">
        <div class="card-body">
            <h3><i class="fas fa-exclamation-circle text-danger"></i>Ups!, Hubo un error</h3>
            <img src="/img/error.jpg" alt="Error inesperado" class="img-fluid">
            <p class="text-secondary">Hubo un error inesperado, favor de intentarlo más tarde.</p>
            <small class="text-secondary">Código de error: <?= $codigoError ?></small>
        </div>
    </div>
</body>
</html>