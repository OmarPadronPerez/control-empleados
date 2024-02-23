<?php
include("../../db.php");
if ($_POST) {
    //print_r($_POST);
    $nombre = strtoupper($_POST["nombre"]);
    $correo = $_POST["correo"];

    //incertar datos en base
    $sentencia = $conexion->prepare("INSERT INTO usuario(id,nombre,password,correo)VALUES(null, :nombre,:pass,:correo)");

    //encriptar contrase;as
    $passHash = password_hash($_POST["pass"], PASSWORD_DEFAULT);
    //asignando valores del post
    $sentencia->bindParam(":nombre", $nombre);
    $sentencia->bindParam(":pass", $passHash);
    $sentencia->bindParam(":correo", $correo);
    $respuesta = $sentencia->execute();
    if ($respuesta) {
        header("Location:index.php");
    }
}

?>

<?php include("../../templates/header.php") ?>

<div class="card">
    <div class="card-header">Agregar Usuario</div>
    <div class="card-body">
        <form action="" method="post">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="helpId"
                    placeholder="" />
            </div>
            <div class="mb-3">
                <label for="correo" class="form-label">Correo</label>
                <input type="text" class="form-control" name="correo" id="correo" aria-describedby="helpId"
                    placeholder="" />
            </div>
            <div class="mb-3">
                <label for="pass" class="form-label">Contraseña</label>
                <input type="text" class="form-control" name="pass" id="pass" aria-describedby="helpId"
                    placeholder="" />
            </div>
            <button type="submit" class="btn btn-primary">
                Guardar
            </button>
        </form>
    </div>
</div>


<?php include("../../templates/footer.php") ?>