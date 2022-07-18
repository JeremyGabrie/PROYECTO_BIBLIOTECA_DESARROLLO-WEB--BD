<?php
    session_start();
    $conexion=mysqli_connect("localhost","root","","biblioteca");
    error_reporting(0);
    $Fallo=$_SESSION['Usuario'];
    if($Fallo==null || $Fallo==""){
        echo '<div style="text-align: center; margin-top: 150px;">
                <p style="font-size: 100px;";>Necesita ingresar un usuario, vuelva a la página de Usuario</p>;
                <a style="text-decoration: none; background-color: orange;
                            padding: 20px; border-radius:10px;
                            color: white;" href="../../../Login/index.php">INICIAR SESIÓN</a>
              </div>';
        die();
        mysqli_close($conexion);
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libro de Reclamaciones</title>
    <link rel="stylesheet" href="../../CSS/reclamacion.css">
    <link rel="stylesheet" href="../../../Inicio/CSS/IndexCss.css">
</head>
<body>
    <!--DIVISION 1 INFORMACIÓN Y LOGIN-->
    <header class="Caja">
        <div class="Caja__Flex">
            <div class="Caja__contentido">
                <img type="image" src="../../../Inicio/img/Logos/mapa.png" />
                <p>San Juan de Lurigancho,Lima</p>
            </div>
            <div class="Caja__contentido">
                <img type="image" src="../../../Inicio/img/Logos/correo.png" />
                <p>obazan@unfv.edu.pe</p>
            </div>
            <div class="Caja__contentido">
                <img type="image" src="../../../Inicio/img/Logos/llamada-telefonica.png" />
                <p>(+51) 748-0888</p>
            </div>
        </div>
        <div class="Caja__Login">
            <img type="image" src="../../../Inicio/img/Logos/Usuario.png" />
            <li><p class="Login"><?php echo "$_SESSION[Nombre] $_SESSION[Apellido]";?></p>
                <ul>
                    <li><a href="../../../HistoriaReservas/HistoriaRes.php">Historial de Reservas</a></li>
                    <li><a href="../../../Login/cerrarsesion.php">Cerrar Sesión</a></li>
                </ul>
            </li>
        </div>
    </header>
    <!--DIVISON 2 LOGO -->
    <div class="header__img">
        <a href="inicio.php">
            <img class="logo" src="../../../Inicio/img/Logos/logoBiblio.jpg" />
        </a>
    </div>
    <!--DIVISON DE BARRA DE MENU-->
    <nav class="Navegacion">
        <ul class="Navegacion__OP">
            <li><a class="Inicio__nav" href="../../../Inicio/inicio.php">INICIO</a></li>
            <li><a href="../../../Nosotros/Nosotros.php">NOSOTROS</a></li>
            <li><a>RECURSOS EN LINEA</a>
                <ul>
                    <li><a href="../../../Recursos/RecursosBD.php">Base de Datos</a></li>
                    <li><a href="../../../Recursos/RecursosDL.php">Documentación en Linea</a></li>
                    <li><a href="../../../Recursos/RecursosRC.php">Revistas en Linea</a></li>
                </ul>
            </li>
            <li><a href="../../../Servicios/servicios.php">SERVICIOS</a> </li>
            <li><a href="../../../Noticias/noticias.php">NOTICIAS</a></li>
            <li><a class="Fin__nav" href="../../../Guias/guias.php">GUIAS</a></li>
        </ul>
    </nav>
    <!--DIVISION DE CONTENIDO DE LA PAGINA WEB-->
    <div class="contenedor">
        <div class="imagenes">
        </div>
        <div class="titulo">
            <h2>FORMULARIO DE RECLAMOS</h2>
        </div>
        <div class="informacion">
            <h2>Libro de Reclamos<br><br></h2>
            <p class="infinci">Atención usuario al momento de rellenar le formulario de libro de Reclamaciones
                debes de tener en cuenta el motivo por el cual lo rellenaras, y también conocer
                la diferencia entre reclamo y queja<br><br><br>

                <h4>Reclamo</h4>
                <p>
                    "Disconformidad relacionada a los productos o servicios"<br><br><br><br>
                </p>

                <h4>Queja</h4>
                <p>
                    "Disconformidad no relacionada a los productos o servicios; o, malestar o 
                    descontento respecto a la atención al público"
                </p>
            </p>
            <img src="../../img/libro.jpg" class="libro">
        </div>
        <div class="formulario">
            <form action="reclamar.php" method="post">
                <h4>Fecha</h4>
                <input class="fecha" required="" name="Fecha" type="date">
                <h4>Motivo</h4>
                <input class="motivo" required="" name="Motivo" type="text" placeholder="Queja o Reclamo">
                <h4>Nombre y Apellido</h4>
                <input class="nombre" required="" name="NombreyApellido" value="<?php echo "$_SESSION[Nombre] $_SESSION[Apellido]";?>"type="text" placeholder="Escriba sus nombres y Apellidos completo">
                <h4>Teléfono</h4>
                <input class="telef" required="" name="Telefono" type="text" placeholder="Ingrese su número telefónico">
                <h4>Lugar del incidente</h4>
                <input class="local" required="" name="Lugar" type="text" placeholder="Local de la Biblioteca o Página web">
                <h4>Descríbenos ¿Que sucedió?</h4>
                <textarea class="descripcion" required="" name="Referencia" placeholder="Describenos que fue lo que ocurrió..."></textarea>
                <div class="enviar">
                    <input class="btnenviar" name="Motivo" type="submit" value="ENVIAR">
                </div>
            </form>
        </div>
        <?php
            if(isset($_POST['Motivo'])){
                $resdom= "INSERT into motivo(NomApe,Telefono,Fecha,Lugar,Descripcion) VALUES
                        ('$_POST[NombreyApellido]','$_POST[Telefono]','$_POST[Fecha]','$_POST[Lugar]','$_POST[Referencia]')";
                mysqli_query($conexion,$resdom);
                mysqli_close($conexion);
                echo "<script>alert('Motivo Registrado, Lamentamos el Inconveniente');
                              window.location='../../servicios.php';</script>";
            }
        ?>
    </div>
    <!--DIVISON DE FOOTER-->
    <footer class="footer__contenedor">
        <div class="footer__contactos">
            <h4>CONTACTOS</h4>
            <div class="footer__contactos__contenido">
                <span>Auspiciado por:</span>
                <br>
                Vicerrectorado de investigación
                <br><br>
                <span>Correo Electronico:</span>
                <br>
                obazan@unfv.edu.pe
                fminchan@unfv.edu.pe
                <br><br>
                <span>Teléfono:</span>
                <br>
                (+51) 748-0888 Anexo: 8818
            </div>
        </div>
        <div class="footer__ubicanos">
            <h4>UBÍCANOS</h4>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1950.9728613793561!2d-77.04690741931!3d-12.047255564801933!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c9a5dac3ca31%3A0x9ef3d6b14994baf7!2sUNFV%20-%20Facultad%20de%20Ingenier%C3%ADa%20Industrial%20y%20de%20Sistemas%20(FIIS)!5e0!3m2!1ses-419!2spe!4v1644122528330!5m2!1ses-419!2spe"
                width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy">
            </iframe>
        </div>
        <div class="footer__redes">
            <h4>REDES SOCIALES</h4>
            <div class="footer__redes__contenedor">
                <div class="footer__redes__contenido">
                    <div>
                        <a
                            href="https://twitter.com/intent/follow?source=followbutton&variant=1.0&screen_name=unfvoficial">
                            <img src="../../../Inicio/img/Logos/Twitter.png" height="40" width="40" />
                        </a>
                        <br>
                        <p>TWITTER</p>
                    </div>
                    <div>
                        <a href="https://www.youtube.com/channel/UCytMCEa8yYZe-GPGqncll4w">
                            <img src="../../../Inicio/img/Logos/youtube.png" height="40" width="40" />
                        </a>
                        <br>
                        <p>YOUTUBE</p>
                    </div>
                    <div>
                        <a href="https://www.facebook.com/Biblioteca-Central-UNFV-100421055641554">
                            <img src="../../../Inicio/img/Logos/Facebook.png" height="40" width="40" />
                        </a>
                        <br>
                        <p>FACEBOOK</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>