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
                <tr class="">
                    <td>1</td>
                    <td>Javier Omar Padrón Pérez</td>
                    <td>Programador</td>
                    <td>
                        <a name="" id="" class="btn btn-primary" href="editar.php" role="button">Editar</a>
                        <button type="button" class="btn btn-danger">Borrar</button>

                    </td>
                </tr>

            </tbody>
        </table>

    </div>
</div>

<?php include("../../templates/footer.php") ?>