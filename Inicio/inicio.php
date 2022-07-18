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
    <title>Inicio</title>
    <link rel="stylesheet" href="CSS/inicio.css" />
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
        <a href="inicio.php">
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
        <h2 id="Letra" class="Nombre" style="margin-left:555px;">INICIO</h2>
        <div class="adelante botones">&#62</div>
        <img src="img/img1.jpg" alt="" id="imagen" />
    </div>
    <!-- CONTENIDO DE LA PAGINA WEB-->
    <div class="contenedor">
        <div class="imagenes">
        </div>
        <div class="hola">
            <h1>¡HOLA!</h1>
        </div>
        <div class="mensajeI">
            <p>
                BIENVENIDO A LA PÁGINA WEB DE LA BIBLIOTECA DE LA FACULTAD DE INGENIERIA INDUSTRIAL Y DE SISTEMAS
            </p>
        </div>
        <DIV class="mensajeA">
            <p>
                El Sistema de Bibliotecas integra los documentos en general, obtenidas por diferentes medios ya sea
                desde un alumno
                hasta las mismas autoridades de nuestra facultad todo ello con la finalidad de lograr la difusion
                investigativa y
                proporcionar los recursos necesarios para fomentar la investigacion a toda la comunidad Villarrealina.
            </p>
            <img src="img/mensaje.png" class="imgMensaj">
        </DIV>
        <div class="opciones">
            <a href="../Nosotros/Nosotros.php" class="menu"><img src="img/somos.png" class="imgNosotros"></a>
            <h4>¿QUIENES SOMOS?</h4>
            <a href="../Recursos/RecursosBD.php" class="menu"><img src="img/recursos.png" class="imgRecursos"></a>
            <h4>RECURSOS</h4>
            <a href="../Servicios/servicios.php" class="menu"><img src="img/logoServic.jpg" class="imgServic"></a>
            <h4>SERVICIOS</h4>
            <a href="../Noticias/noticias.php" class="menu"><img src="img/logoNotic.jpg" class="imgNotic"></a>
            <h4>NOTICIAS</h4>
            <a href="../Guias/guias.php" class="menu"><img src="img/logoGuia.png" class="imgGuia"></a>
            <h4>GUIAS</h4>
        </div>
        <div class="titulo">
            <h2>DESTACADOS</h2>
        </div>
        <div class="libros">
            <h2>Libros</h2>
        </div>
        <div class="articulos">
            <h2>Articulos</h2>
        </div>
        <div class="tesis">
            <h2>Tesis</h2>
        </div>

        <div class="libro1">
            <img src="img/analisis.JPG" class="material">
            <a class="temas" href="../Recursos/RecursosDL_Libros/Doc1.php">
                <p>Técnicas de análisis multivariante de datos. Aplicaciones con SPSS</p>
            </a>
        </div>
        <div class="libro2">
            <img src="img/metodos.png" class="material">
            <a class="temas" href="../Recursos/RecursosDL_Libros/Doc2.php">
                <p>INGENIERÍA DE MÉTODOS movimientos y tiempos </p>
            </a>
        </div>

        <div class="arti1">
            <img src="img/arti1.png" class="material">
            <a class="temas" href="../Recursos/RecursosDL_Libros/Doc3.php">
                <p>Introducción a los Conceptos Básicos de la Teoría General de Sistemas</p>
            </a>
        </div>
        <div class="arti2">
            <img src="img/arti2.png" class="material">
            <a class="temas" href="../Recursos/RecursosDL_Libros/Doc4.php">
                <p>
                    Producción Científica en la Base de Datos Scopus de una Universidad Privada del Perú</p>
            </a>
        </div>

        <div class="tesis1">
            <img src="img/tesis1.png" class="material">
            <a class="temas" href="../Recursos/RecursosDL_Libros/Doc5.php">
                <p>Propuesta de Mejora del modelo de atención al cliente para optimizar los servicios en la
                    municipalidad provincial de huari</p>
            </a>
        </div>
        <div class="tesis2">
            <img src="img/tesis2.png" class="material">
            <a class="temas" href="../Recursos/RecursosDL_Libros/Doc6.php">
                <p>"La inteligencia Artificial y el gobierno electrónico en el instituto de gobernabilidad y tecnología"
                </p>
            </a>
        </div>
        <div class="titulo2">
            <H2>APOYANOS</H2>
        </div>

        <div class="logo">
            <img src="img/donar.png">
        </div>

        <div class="descripcion">
            <p>
                En esta sección usted pódra encontrar la forma de apoyar a la biblioteca brindandonos
                como donación cualquier material académico que tenga, recuerde que el conocimiento se debe difundir
                y no guardar.
            </p>
        </div>

        <div class="siguiente">
            <a href="../Donacion/apoyo.php"><input class="btnsiguiente" type="button" value="VER MÁS"></a>
        </div>
        <div class="vacio"></div>
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
    <script src="Image.js"></script>
</body>
</html>