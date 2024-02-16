<?php include("../../templates/header.php") ?>

<div class="espacio"></div>

<style>

</style>

<h2>Empleados</h2>
<div class="card">
    <div class="card-header">
        <a type="button" class="btn btn-primary" href="crear.php">
            Crear empleados
        </a>

    </div>
    <div class="card-body">
        <div class="table-responsive-sm">
            <table class="table table">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Foto</th>
                        <th scope="col">CV</th>
                        <th scope="col">Puesto</th>
                        <th scope="col">F. Ingreso</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>

                    <tr class="">
                        <td scope="row">Javier Omar Padrón Pérez</td>
                        <td>imagen.jpg</td>
                        <td>cv.pdf</td>
                        <td>Programador web</td>
                        <td>16/02/2024</td>
                        <td>
                            <a name="" id="" class="btn btn-info" href="editar.php" role="button">Editar</a>
                            <a name="" id="" class="btn btn-danger" href="#" role="button">Eliminar</a>

                        </td>

                    </tr>

                </tbody>
            </table>
        </div>


    </div>
    <div class="card-footer text-muted">Footer</div>
</div>



<?php include("../../templates/footer.php") ?>