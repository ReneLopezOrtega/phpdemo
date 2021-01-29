<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro de nuevo alumno</title>
    <link rel="stylesheet" href="/css/estilos.css">
</head>
<body class="bg-dark">

    <div class="card w-75 mx-auto">
        <form action="nuevo.php" method="post">

            <div class="card-header">
                <div class="row">
                    <div class="col text-left">
                        <h3>Registro de nuevo alumno</h3>
                    </div>
                    <div class="col text-right">
                        <button type="submit" class="btn btn-success mr-3">Guardar</button>
                        <a href="index.php" class="btn btn-secondary">Cancelar</a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="row mb-4">
                    <div class="col">
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre" autofocus required>
                    </div>
                    <div class="col">
                        <input type="text" name="apellidos" class="form-control" placeholder="Apellidos" required>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col">
                        <input type="email" name="email" class="form-control" placeholder="E-mail" autofocus required>
                    </div>
                    <div class="col">
                        <input type="text" name="username" class="form-control" placeholder="Username" required>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col">
                        <input type="password" name="password" class="form-control" placeholder="Contraseña" autofocus required>
                    </div>
                    <div class="col">
                        <input type="password" name="password2" class="form-control" placeholder="Repetir contraseña" required>
                    </div>
                </div>
                <?php if(isset($errores)): ?>
                    <ul><?= $errores ?></ul>
                <?php endif; ?>
            </div>



        </form>
    </div>

</body>
</html>