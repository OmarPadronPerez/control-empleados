<?php
include("../../db.php");
$sentencia = $conexion->prepare("SELECT * FROM usuario");
$sentencia->execute();
$lista_usuarios = $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>

<?php include("../../templates/header.php") ?>

<div class="card">
    <div class="card-header">
        <a name="" id="" class="btn btn-primary" href="crear.php" role="button">Agregar Usuario</a>
    </div>
    <div class="card-body">

        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre del Usuario</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($lista_usuarios as $key) { ?>
                <tr class="">
                    <td><?php echo $key['id']  ?></td>
                    <td><?php echo $key['nombre'] ?></td>
                    <td><?php echo $key['correo'] ?></td>
                    <td>
                        <a name="" id="" class="btn btn-primary" href="editar.php" role="button">Editar</a>
                        <button type="button" class="btn btn-danger">Borrar</button>

                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>

    </div>
</div>

<?php include("../../templates/footer.php") ?>