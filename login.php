<?php
include("db.php");
if ($_POST) {

    $usuario = $_POST["usuario"];
    $pass = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $sentencia = $conexion->prepare("SELECT password FROM `usuario` WHERE id= :id");
    $sentencia->bindParam(":id", $usuario);
    $respuesta = $sentencia->execute();
    $usuario = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    
    echo $usuario[0]["password"]." // ". $pass;
    if (password_verify($usuario[0]["password"], $pass) == 0) {
        session_start();
        $_SESSION["id"] = $usuario;
        header("Location:index.php");
    }else {
        echo '<script language="javascript">alert("contraseña incorrecta");</script>';
    }
}

?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <link rel="stylesheet" href="<?php echo $url_base ?>style.css">
</head>
<style>
    .bg-image-vertical {
        position: relative;
        overflow: hidden;
        background-repeat: no-repeat;
        background-position: right center;
        background-size: auto 100%;
    }

    @media (min-width: 1025px) {
        .h-custom-2 {
            height: 100%;
        }
    }
</style>

<section class="vh-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 text-black">

                <div class="px-5 ms-xl-4">
                    <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
                    <span class="h1 fw-bold mb-0">Logo</span>
                </div>

                <div class="d-flex align-items-center  px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

                    <form action="" method="POST" style="width: 23rem;">

                        <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Inicio</h3>

                        <div class="form-outline mb-4">
                            <input type="text" name="usuario" id="usuario" class="form-control form-control-lg" />
                            <label class="form-label" for="usuario">Usuario</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="password" name="password" id="password" class="form-control form-control-lg" />
                            <label class="form-label" for="password">Contraseña</label>
                        </div>

                        <div class="pt-1 mb-4">
                            <button type="submit" class="btn btn-primary">
                                Guardar
                            </button>
                        </div>
                    </form>

                </div>

            </div>
            <div class="col-sm-6 px-0 d-none d-sm-block">
                <img src="./imagenes/Login.webp" alt="Login image" class="w-100 vh-100"
                    style="object-fit: cover; object-position: left;">
            </div>
        </div>
    </div>
</section>