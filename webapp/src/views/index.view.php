<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Alumnos</title>
    <link rel="stylesheet" href="estilos/main.css">
</head>

<body class="bg-dark">

    <div class="card w-75 mx-auto">
        <!-- ##### ENCABEZADO DE TARJETA -->
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <h3 class="card-title">Listado de Alumnos</h3>
                </div>
                <div class="col text-right">
                    <a href="nuevo.php" class="btn btn-primary mr-3 btn-card">Agregar</a>
                    <a href="logout.php" class="btn btn-warning btn-card">Salir</a>
                </div>
            </div>
        </div>
        <!-- ##### CUERPO DE TARJETA -->
        <div class="card-body">
            <table class="table table-hover table-borderless">
                <thead>
                    <tr>
                        <th>NOMBRE</th>
                        <th>APELLIDOS</th>
                        <th>EMAIL</th>
                        <th>USERNAME</th>
                        <th>CREADO</th>
                        <th>MODIFICADO</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($usuarios as $fila): ?>
                        <tr>
                            <td><?= $fila['nombre'] ?></td>
                            <td><?= $fila['apellidos'] ?></td>
                            <td><?= $fila['email'] ?></td>
                            <td><?= $fila['username'] ?></td>
                            <td><?= $fila['creado'] ?></td>
                            <td><?= $fila['modificado'] ?></td>
                            <td>
                                <a href="editar.php?id=<?= $fila['id'] ?>">
                                    <i class="far fa-edit icono"></i>
                                </a>
                            </td>
                            <td>
                                <a href="eliminar.php?id=<?= $fila['id'] ?>">
                                    <i class="far fa-trash-alt icono"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>