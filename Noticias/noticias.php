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
                            color: white;" href="../Login/index.php">INICIAR SESIÓN</a>
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
    <title>Noticias</title>
    <link rel="stylesheet" href="CSS/NoticiaStyle.css">
    <link rel="stylesheet" href="../Inicio/CSS/IndexCss.css">
</head>
<body>
    <!--DIVISION 1 INFORMACIÓN Y LOGIN-->
    <header class="Caja">
        <div class="Caja__Flex">
            <div class="Caja__contentido">
                <img type="image" src="../Inicio/img/Logos/correo.png" />
                <p>San Juan de Lurigancho,Lima</p>
            </div>
            <div class="Caja__contentido">
                <img type="image" src="../Inicio/img/Logos/correo.png" />
                <p>obazan@unfv.edu.pe</p>
            </div>
            <div class="Caja__contentido">
                <img type="image" src="../Inicio/img/Logos/llamada-telefonica.png" />
                <p>(+51) 748-0888</p>
            </div>
        </div>
        <div class="Caja__Login">
            <img type="image" src="../Inicio/img/Logos/Usuario.png" />
            <li><p class="Login"><?php echo "$_SESSION[Nombre] $_SESSION[Apellido]";?></p>
                <ul>
                    <li><a href="../HistoriaReservas/HistoriaRes.php">Historial de Reservas</a></li>
                    <li><a href="../Login/cerrarsesion.php">Cerrar Sesión</a></li>
                </ul>
            </li>
        </div>
    </header>
    <!--DIVISON 2 LOGO -->
    <div class="header__img">
        <a href="../Inicio/inicio.php">
            <img class="logo" src="../Inicio/img/Logos/logoBiblio.jpg" />
        </a>
    </div>
    <!--DIVISON DE BARRA DE MENU-->
    <nav class="Navegacion">
        <ul class="Navegacion__OP">
            <li><a class="Inicio__nav" href="../Inicio/inicio.php">INICIO</a></li>
            <li><a href="../Nosotros/Nosotros.php">NOSOTROS</a>
            </li>
            <li><a>RECURSOS EN LINEA</a>
                <ul>
                    <li><a href="../Recursos/RecursosBD.php">Base de Datos</a></li>
                    <li><a href="../Recursos/RecursosDL.php">Documentación en Linea</a></li>
                    <li><a href="../Recursos/RecursosRC.php">Revistas en Linea</a></li>
                </ul>
            </li>
            <li><a href="../Servicios/servicios.php">SERVICIOS</a> </li>
            <li><a href="../Noticias/noticias.php">NOTICIAS</a></li>
            <li><a class="Fin__nav" href="../Guias/guias.php">GUIAS</a></li>
        </ul>
    </nav>
    <!--DIVISION IMG-->
    <div class="Contenedor__Imagen">
        <div class="atras botones">&#60</div>
        <h2 id="Letra" class="Nombre" style="margin-left:500px;">NOTICIAS</h2>
        <div class="adelante botones">&#62</div>
        <img src="../Inicio/img/img1.jpg" alt="" id="imagen" />
    </div>
    <!--CONTENIDO DE LA PAGINA WEB-->
    <div class="contenedor">

        <div class="subtitulo1">
            <h3>NOTICIAS Y TENDENCIA</h3>
        </div>

        <DIV class="noti1">
            <div>
                <img src="img/memoria.jpg" class="memoria">
            </div>
            <a
                href="http://www.unfv.edu.pe/vrin/noticias/item/696-nuestra-universidad-pone-a-disposicion-del-vicerrectorado-de-investigacion-remodelados-ambientes-del-cupbs-y-de-la-oficina-de-repositorio-cientifico-de-la-biblioteca-central">
                <p><br><br>Memoria de Gestion del vicerrectorado de Investigacion 2017-2021</p>
            </a>
        </DIV>
        <DIV class="noti2">
            <div>
                <img src="img/cupbs.jpg" class="cupbs">
            </div>
            <a
                href="http://www.unfv.edu.pe/vrin/noticias/item/695-nuestra-universidad-pone-a-disposicion-del-vicerrectorado-de-investigacion-remodelados-ambientes-del-cupbs-y-de-la-oficina-de-repositorio-cientifico-de-la-biblioteca-central">
                <p><br>
                    Nuestra Universidad pone a disposición del Vicerrectorado de Investigación remodelados ambientes del
                    CUPBS y de la
                    Oficina de Repositorio Científico de la Biblioteca Central</p>
            </a>
        </DIV>
        <DIV class="noti3">
            <div>
                <img src="img/cuentos.jpg" class="cuento">
            </div>
            <a
                href="http://www.unfv.edu.pe/vrin/editorial/actividades/noticias-de-la-editorial/item/690-concluye-cuarto-concurso-cuentos-de-amor-universitario-amor-en-aulas-patios-y-mas-javier-alberto-barreda-jara">
                <p><br><br>
                    Concluye Cuarto Concurso Cuentos de Amor Universitario: "Amor en aulas, patios y más, Javier Alberto
                    Barreda Jara"
                </p>
            </a>
        </DIV>
        <DIV class="noti4">
            <div>
                <img src="img/datos.jpg" class="datos">
            </div>
            <a
                href="http://www.unfv.edu.pe/vrin/biblioteca-central/actividades/2021-01-03-21-42-49/item/691-bases-de-datos-y-libros-digitales-para-la-investigacion-en-ciencias-humanidades-e-ingenierias">
                <p><br><br>
                    Bases de datos y libros digitales para la investigación en ciencias, humanidades e ingenierías
                </p>
            </a>
        </DIV>

        <div class="subtitulo2">
            <h3>EVENTOS</h3>
        </div>

        <div class="imgEvento">
            <img src="img/capa.jpg" class="capa">
        </div>
        <div class="evento1">
            <img src="img/redalyc.jpg" class="redal">
            <a href="https://www.facebook.com/watch/live/?ref=watch_permalink&v=902510326823001">
                <p>Capacitacion en el uso y manejo de la base de datos Redalyc</p>
            </a>
        </div>
        <div class="evento2">
            <img src="img/unesco.jpg" class="unesco">
            <a href="https://www.facebook.com/watch/live/?ref=watch_permalink&v=2508717349253069">
                <p>Capacitacion en el uso y manejo de la base de datos de la biblioteca digital de la UNESCO</p>
            </a>
        </div>
        <div class="evento3">
            <img src="img/econbiz.jpg" class="econbiz">
            <a href="https://www.facebook.com/watch/live/?ref=watch_permalink&v=387464485626201">
                <p>Capacitacion en el uso y manejo de la base de datos de ECONBIZ</p>
            </a>
        </div>
        <div class="evento4">
            <img src="img/redib.png" class="redib">
            <a href="https://www.facebook.com/watch/live/?ref=watch_permalink&v=394080221932203">
                <p>Capacitacion en el uso y manejo de la base de datos de REDIB</p>
            </a>
        </div>
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
                            <img src="../Inicio/img/Logos/Twitter.png" height="40" width="40" />
                        </a>
                        <br>
                        <p>TWITTER</p>
                    </div>
                    <div>
                        <a href="https://www.youtube.com/channel/UCytMCEa8yYZe-GPGqncll4w">
                            <img src="../Inicio/img/Logos/youtube.png" height="40" width="40" />
                        </a>
                        <br>
                        <p>YOUTUBE</p>
                    </div>
                    <div>
                        <a href="https://www.facebook.com/Biblioteca-Central-UNFV-100421055641554">
                            <img src="../Inicio/img/Logos/Facebook.png" height="40" width="40" />
                        </a>
                        <br>
                        <p>FACEBOOK</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="../Inicio/Image.js"></script>
</body>
</html>