<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambio de Contraseña</title>
    <link rel="stylesheet" href="../loginstyle.css">
</head>
<body>
    <div class="container">
        <div class="container_form">
            <img src="imgCambio/cambio.png" alt="esto es una imagen de candado">
            <h2>Cambio de Contraseña</h2>
            <form action="validarCambio.php" method="post">
                <input name="usuario" type="text" placeholder="Usuario">
                <input name="contra" type="password" placeholder="Contraseña">
                <input name="nuevacontra" type="password" placeholder="Nueva Contraseña">
                <input class="boton" type="submit" value="CONFIRMAR">

                <?php
                    if(isset($_GET['error'])){
                        $error= $_GET['error'];
                        if($error=="incorrecto"){
                           echo "<h2>El Usuario o contraseña <br> son incorrectas</h2>";
                        }
                        if($error=="vacio"){
                            echo "<h2>Rellene todos los campos</h2>";
                        }
                    }
                ?>
            </form>
        </div>
    </div>
</body>
</html>