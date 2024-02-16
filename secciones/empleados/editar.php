<?php include("../../templates/header.php") ?>

<div class="espacio"></div>
<div class="card">
    <div class="card-header">Datos del empleado</div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre(s)</label>
                <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="helpId"
                    placeholder="" />
            </div>
            <div class="mb-3">
                <label for="apellidos" class="form-label">Apellidos</label>
                <input type="text" class="form-control" name="apellidos" id="apellidos" aria-describedby="helpId"
                    placeholder="" />
            </div>
            <div class="mb-3">
                <label for="apellidos" class="form-label">Foto:</label>
                <input type="file" class="form-control" name="foto" id="foto" aria-describedby="helpId"
                    placeholder="" />
            </div>
            <div class="mb-3">
                <label for="cv" class="form-label">CV(PDF)</label>
                <input type="file" class="form-control" name="cv" id="cv" aria-describedby="helpId" placeholder="" />
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Puesto</label>
                <select class="form-select form-select-lg" name="idPuesto" id="idPuesto">
                    <option selected>Select one</option>
                    <option value="">New Delhi</option>
                    <option value="">Istanbul</option>
                    <option value="">Jakarta</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Fecha de ingreso</label>
                <input type="date" class="form-control" name="fIngreso" id="fIngreso" aria-describedby=""
                    placeholder="" />
            </div>

            <button type="submit" class="btn btn-primary">
                Agregar
            </button>

        </form>
    </div>
    <div class="card-footer text-muted">Footer</div>
</div>

<div class="espacio"></div>
<div class="espacio"></div>

<?php include("../../templates/footer.php") ?>