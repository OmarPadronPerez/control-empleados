<?php
include("../../db.php");
if ($_POST) {
    //recoleccion de post
    $nombre_puesto = (isset($_POST["puesto"])) ? $_POST["puesto"] : "";
    //incertar datos en base
    $sentencia = $conexion->prepare("INSERT INTO puestos(id,puesto)VALUES(null, :nombre_puesto)");
    //asignando valores del post
    $sentencia->bindParam(":nombre_puesto", $nombre_puesto);
    $respuesta=$sentencia->execute();
    if ($respuesta) {
        header("Location:index.php") ;
    }
    
}
?>

<?php include("../../templates/header.php") ?>

<div class="card">
    <div class="card-header">Puestos</div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="puesto" class="form-label">Nombre del puesto</label>
                <input type="text" class="form-control" name="puesto" id="puesto" aria-describedby="helpId"
                    placeholder="" />
            </div>
            <button type="submit" class="btn btn-primary">
                Agregar
            </button>

        </form>
    </div>
</div>


<?php include("../../templates/footer.php") ?>