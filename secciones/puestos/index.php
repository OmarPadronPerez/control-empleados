<?php
include("../../db.php");
$sentencia = $conexion->prepare("SELECT * FROM puestos");
$sentencia->execute();
$lista_puestos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>
<?php include("../../templates/header.php") ?>

<div class="card">
    <div class="card-header">
        <a name="" id="" class="btn btn-primary" href="crear.php" role="button">Agregar</a>
    </div>
    <div class="card-body">

        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre del puesto</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lista_puestos as $key) { ?>
                    <tr class="">
                        <td>
                            <?php echo $key['id'] ?>
                        </td>
                        <td>
                            <?php echo $key['puesto'] ?>
                        </td>
                        <td>
                            <a name="" id="" class="btn btn-danger" href="editar.php" role="button">Editar</a>
                        </td>
                    </tr>
                <?php } ?>


            </tbody>
        </table>

    </div>
</div>




<?php include("../../templates/footer.php") ?>