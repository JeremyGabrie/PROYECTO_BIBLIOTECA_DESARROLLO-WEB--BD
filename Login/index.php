<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="candado.png">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="loginstyle.css">
</head>

<body>
    <div class="container">
        <div class="container_form">
            <img src="candado.png" alt="esto es una imagen de candado">
            <h2>Iniciar Sesion</h2>
            <form id="form" action="../Inicio/comprobarLogin.php" method="post">
                <input name="usuarioIng" type="text" placeholder="Usuario o Codigo">
                <input name="contraIng" type="password" placeholder="Contraseña">
                <div class="ContenedorBotones">
                    <input class="boton" type="submit" value="Ingresar">
                    <a href="registro/registro.php"><input class="boton" type="button" value="Registrarse" id="action"></a>
                    </div>
                <a class="Cambio" href="cambio/cambio.php">¿Desea cambiar su Contraseña?</a>
                <?php
                    if(isset($_GET['error'])){
                        $error= $_GET['error'];
                        if($error=="incorrecto"){
                           echo "<h2>El Usuario ingresado no existe</h2>";
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


