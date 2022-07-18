<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="registyle.css">
</head>
<body>

    <div class="container">
        <div class="container_form">
            <h2>Registro Alumno</h2>
            <form action="ConfirmarRegistro/validarRA.php" method="post" id="Envio">
                <input class="boton" type="button" value="Alumno">
                <a href="registroDoc.php"><input class="boton" type="button" value="Docente"></a>
                <a href="registroAdmi.php"><input class="boton" type="button" value="Administrativo"></a>
                <a href="registroExt.php"><input class="boton" type="button" value="Externo"></a>
                <input name="nombreAlum" class="texto"type="text" placeholder="Nombres">
                <input name="apellidoAlum" class="texto" type="text" placeholder="Apellidos">
                <input name="dniAlum" class="texto" type="text" placeholder="Numero (DNI, Pasaporte, Otros)">
                <input name="codigoAlum" class="texto" type="text" placeholder="Codigo">
                <input name="correoAlum" class="texto" type="text" placeholder="Correo: example@unfv.edu.pe">
                <input name="contraAlum" class="texto" type="password" placeholder="Contraseña">
                <input name="crear" type="submit" class="boton2" value="CREAR">
                <?php
                    if(isset($_GET['error'])){
                        $error= $_GET['error'];
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
