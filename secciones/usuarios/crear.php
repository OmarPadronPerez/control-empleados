<?php include("../../templates/header.php") ?>

<div class="card">
    <div class="card-header">Agregar Usuario</div>
    <div class="card-body">
        <form action="" method="post">
            <div class="mb-3">
                <label for="" class="form-label">Usuario</label>
                <input type="text" class="form-control" name="usuario" id="usuario" aria-describedby="helpId"
                    placeholder="" />
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Correo</label>
                <input type="text" class="form-control" name="correo" id="correo" aria-describedby="helpId"
                    placeholder="" />
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Contraseña</label>
                <input type="text" class="form-control" name="pass" id="pass" aria-describedby="helpId"
                    placeholder="" />
            </div>

        </form>

    </div>
    <div class="card-footer text-muted">Footer</div>
</div>


<?php include("../../templates/footer.php") ?>