<?php include("../../templates/header.php") ?>

<div class="card">
    <div class="card-header">Puestos</div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="" class="form-label">Nombre del puesto</label>
                <input type="text" class="form-control" name="puesto" id="puesto" aria-describedby="helpId"
                    placeholder="" />
            </div>
            <button type="button" class="btn btn-primary">
                Agregar
            </button>

        </form>
    </div>
    <div class="card-footer text-muted">Footer</div>
</div>


<?php include("../../templates/footer.php") ?>