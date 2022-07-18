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
            <h2>Registro Externos</h2>
            <form action="ConfirmarRegistro/validarRE.php" method="post">
                <a href="registro.php"><input class="boton" type="button" value="Alumno"></a>
                <a href="registroDoc.php"><input class="boton" type="button" value="Docente"></a>
                <a href="registroAdmi.php"><input class="boton" type="button" value="Administrativo"></a>
                <input class="boton" type="button" value="Externo">
                <input name="condicion" type="hidden" value="Externo">
                <input name="nombreExt" class="texto"type="text" placeholder="Nombres">
                <input name="apellidoExt" class="texto" type="text" placeholder="Apellidos">
                <input name="dniExt" class="texto" type="text" placeholder="Numero (DNI, Pasaporte, Otros)">
                <input name="correoExt" class="texto" type="text" placeholder="Correo: example@gmail.com">
                <input name="direccionExt" class="texto" type="text" placeholder="Dirección">
                <input name="telefonoExt" class="texto" type="text" placeholder="Telefono">
                <input name="nivelacaExt" class="texto" type="text" placeholder="Nivel Academico (Escolar, universitario, N.A)">
                <input name="institucionExt" class="texto" type="text" placeholder="Nombre de institucion educativa">
                <input name="contraExt" class="texto" type="password" placeholder="Contraseña">
                <input name="crear" class="boton2" type="submit" value="CREAR">

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