<?php
include("../../db.php");
//consulta en base
$txtID = (isset($_GET["txtID"])) ? $_GET["txtID"] : "";
$sentencia = $conexion->prepare("SELECT `id`, `nombre`, `correo` FROM usuario WHERE id=$txtID");
$sentencia->execute();
$resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);

if($_POST){
    include("../../db.php");
    $id=$_POST["ID"];
    $nombre=$_POST["nombre"];
    $email=$_POST["correo"];
    $password=password_hash($_POST["pass"], PASSWORD_DEFAULT);
    //$sql="UPDATE usuario set nombre=\"$nombre\", correo=\"$email\"";
    $sql="UPDATE usuario set nombre=:nombre, correo=:correo";
    if(strlen($password)> 0){
        //$sql.= ", password=\"$password\"";
        $sql.= ", password=:password";
    }
    $sql.= " WHERE id=:id";
    $sentencia = $conexion->prepare($sql);
    $sentencia->bindParam(":nombre", $nombre);   
    $sentencia->bindParam(":correo", $email);
    if(strlen($password)> 0){
        $sentencia->bindParam(":password", $password);
    }
    $sentencia->bindParam(":id", $id);
    $respuesta = $sentencia->execute();

    if ($respuesta) {
        header("Location:index.php");
    }
}

?>

<?php include("../../templates/header.php") ?>
<div class="espacio"></div>
<div class="card">
    <div class="card-header">
        <h2>Actualizar Usuario</h2>
    </div>
    <div class="card-body">
        <form action="" method="post">

            <div class="mb-3">
                <label for="ID" class="form-label">ID</label>
                <input readonly value="<?php echo $resultado[0]["id"] ?>" type="text" class="form-control"
                    name="ID" id="ID" aria-describedby="helpId" placeholder="" />
            </div>

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" value="<?php echo $resultado[0]["nombre"] ?>" class="form-control" name="nombre"
                    id="nombre" aria-describedby="helpId" placeholder="" />
            </div>
            <div class="mb-3">
                <label for="correo" class="form-label">Correo</label>
                <input type="text" value="<?php echo $resultado[0]["correo"] ?>" class="form-control" name="correo"
                    id="correo" aria-describedby="helpId" placeholder="" />
            </div>
            <div class="mb-3">
                <label for="pass" class="form-label">Contraseña</label>
                <input type="text" class="form-control" name="pass" id="pass" aria-describedby="helpId"
                    placeholder="" />
            </div>
            <button type="submit" action="" class="btn btn-primary">
                Guardar
            </button>
        </form>
    </div>
</div>


<?php include("../../templates/footer.php") ?>