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
            <h2>Registro Docente</h2>
            <form action="ConfirmarRegistro/validarRD.php" method="post">
                <a href="registro.php"><input class="boton" type="button" value="Alumno"></a>
                <input class="boton" type="button" value="Docente">
                <a href="registroAdmi.php"><input class="boton" type="button" value="Administrativo"></a>
                <a href="registroExt.php"><input class="boton" type="button" value="Externo"></a>
                <input name="condicion" type="hidden" value="Docente">
                <input name="nombreDoc" class="texto"type="text" placeholder="Nombres">
                <input name="apellidoDoc" class="texto" type="text" placeholder="Apellidos">
                <input name="dniDoc" class="texto" type="text" placeholder="Numero (DNI, Pasaporte, Otros)">
                <input name="codigoDoc" class="texto" type="text" placeholder="Codigo">
                <input name="correoDoc" class="texto" type="text" placeholder="Correo: example@unfv.edu.pe">
                <input name="gradoacaDoc" class="texto" type="text" placeholder="Grado Academico">
                <input name="telefonoDoc" class="texto" type="text" placeholder="Telefono">
                <input name="contraDoc" class="texto" type="password" placeholder="Contraseña">
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