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
<html>
<head>
    <title>Biblioteca UNFV.</title>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Language" content"=es" />
    <meta name="Keywords" content="biblioteca,UNFV" />
    <meta name="Description" content="Biblioteca de la FIIS,FIIS UNFV" />
    <meta name="Distribution" content="global" />
    <meta name="Robots" content="all" />
    <link rel="shortcut icon" href="../Inicio/img/libro.jpg" />
    <link rel="stylesheet" href="CSS/Recursos.css" />
    <link rel="stylesheet" href="../Inicio/CSS/IndexCss.css">
</head>
<body>
    <!--DIVISION 1 INFORMACIÓN Y LOGIN-->
    <header class="Caja">
        <div class="Caja__Flex">
            <div class="Caja__contentido">
                <img type="image" src="../Inicio/img/Logos/mapa.png" />
                <p>Av. Óscar R. Benavides 450, Cercado de Lima 15082</p>
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
        <h2 id="Letra" class="Nombre" style="margin-left:300px;">REVISTAS EN LINEA</h2>
        <div class="adelante botones">&#62</div>
        <img src="../Inicio/img/img1.jpg" alt="" id="imagen" />
    </div>
    <!--DIVISION BD-->
    <div class="Contenido__RC">
        <div>
            <h2>REVISTAS CIENTIFICAS</h2>
        </div>
        <div class="Contenido__RC__Repositorio">
                <div class="Contenido__RC__1">
                    <a href="https://portal.concytec.gob.pe/index.php"><img src="imgRecursos/concytec.png" width="230px"
                            height="150px" /></a>
                    <div>
                        <h3>CONCYTEC</h3>
                        <p style="margin:40 auto 0 auto;">El Concytec es la institución rectora del Sistema Nacional de
                            Ciencia y Tecnología e Innovación
                            Tecnológica, SINACYT, integrada por la Academia, los Institutos de Investigación del Estado,
                            las
                            organizaciones empresariales, las comunidades y la sociedad civil.</p>
                    </div>
                </div>
                <div class="Contenido__RC__1">
                    <a href="https://www.redalyc.org/"><img src="imgRecursos/redalyc.png" width="230px"
                            height="120px" /></a>
                    <div>
                        <h3>REDALYC</h3>
                        <p>Redalyc es un sistema de indización que integra a su índice las revistas de alta calidad
                            científica y editorial de la región, después de 16 años de dar visibilidad y apoyar en la
                            consolidación de las revistas, ahora integra de manera exclusiva a las que comparten el
                            modelo
                            de publicación sin fines de lucro para conservar la naturaleza académica y abierta de la
                            comunicación científica, de cualquier región.
                        </p>
                    </div>
                </div>
                <div class="Contenido__RC__1">
                    <a href="https://scielo.org/es/"><img src="imgRecursos/scielo.png" width="230px"
                            height="120px" /></a>
                    <div>
                        <h3>SCIELO</h3>
                        <p>Se describe el modelo SciELO (Scientific Electronic Library Online) para la publicación y
                            difusión electrónica de revistas científicas, su origen y evolución, su metodología,
                            componentes, servicios y potencialidades, así como su implantación en España. Con 13 países
                            participantes que suponen 8 portales certificados y 5 portales en desarrollo, más dos
                            portales
                            temáticos, en febrero de 2009 SciELO recogía 611 revistas y 195.789 artículos.</p>
                    </div>
                </div>
                <div class="Contenido__RC__1">
                    <a href="https://worldwidescience.org/"><img src="imgRecursos/world.jpg" width="230px"
                            height="120px" /></a>
                    <div>
                        <h3>WORLD WIDE SCIENCIE</h3>
                        <p>WorldWideScience es un portal científico global compuesto por bases de datos y portales
                            científicos nacionales e internacionales. WorldWideScience.org acelera el descubrimiento y
                            el
                            progreso científico al proporcionar una búsqueda integral de bases de datos de todo el mundo
                            (Arquitectura: lo que hay debajo del capó). Multilingual WorldWideScience.org proporciona
                            búsqueda y traducción en tiempo real de literatura científica multilingüe dispersa por todo
                            el
                            mundo.
                        </p>
                    </div>
                </div>
        </div>
        <div>
            <h2>REVISTAS DE INVESTIGACIÓN</h2>
        </div>
        <div class="Contenido__RC__Investifacion">
            <iframe src="https://revistas.unfv.edu.pe/">
            </iframe>
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
                        <a href="https://twitter.com/intent/follow?source=followbutton&variant=1.0&screen_name=unfvoficial">
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