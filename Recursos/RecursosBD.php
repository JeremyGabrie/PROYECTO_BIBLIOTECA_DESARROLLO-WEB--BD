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
            <li><a href="../Nosotros/Nosotros.php">NOSOTROS</a></li>
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
        <h2 id="Letra" class="Nombre" style="margin-left:380px;">BASE DE DATOS</h2>
        <div class="adelante botones">&#62</div>
        <img src="../Inicio/img/img1.jpg" alt="" id="imagen" />
    </div>
    <!--DIVISION BD-->
    <div class="Contenido__BD">
        <p>
            Las siguientes bases de datos contienen artículos de investigación, libros, tesis, informes, trabajos de
            investigación y académicos en acceso abierto de las diferentes áreas del conocimiento.
        </p>
        <div>
            <h2>REPOSITORIOS DE BASE DE DATOS</h2>
        </div>
        <div class="Contenido__BD__Repositorio">
            <div>
                <h3>Agecon-search</h3>
                <br>
                <a href="https://ageconsearch.umn.edu/"><img src="imgRecursos/agecon-search.jpg" /></a>
                <br>
                <p>Presenta los siguientes recursos: revistas científicas, documentos de conferencia, capítulos de
                    libros, trabajos de discusión y tesis.</p>
            </div>
            <div>
                <h3>Agris FAO</h3>
                <br>
                <a href="https://agris.fao.org/agris-search/index.do"><img src="imgRecursos/agris.jpg" /></a>
                <br>
                <p>Base de datos mundial que proporciona acceso a información relativa a la ciencia y la tecnología
                    agrícola. Está respaldada por la FAO. Tiene enlaces a texto completo de publicaciones, artículos de
                    revistas, monografías, capítulos de libros, literatura gris, informes técnicos, tesis, disertaciones
                    y conferencias.
                </p>
            </div>
            <div>
                <h3>Alicia</h3>
                <br>
                <a href="https://alicia.concytec.gob.pe/"><img src="imgRecursos/logo_alicia.png" width="230px"
                        height="120px" /></a>
                <br>
                <p>El Repositorio Nacional Digital ALICIA ofrece una gran variedad de trabajos de investigación, libros
                    y artículos científicos multidisciplinarios a texto completo dirigidos a investigadores y
                    estudiantes.
                </p>
            </div>
            <div>
                <h3>Doaj</h3>
                <a href="https://doaj.org/"><img src="imgRecursos/logo_doaj.png" width="230px" height="120px" /></a>
                <br>
                <p>El Directory of Open Access Journals (DOAJ) es un directorio de revistas de acceso abierto. Permite
                    explorar publicaciones científicas y académicas que cumplen con estándares de calidad como la
                    revisión por pares y el control de calidad editorial.
                </p>
            </div>
            <div>
                <h3>ArchInform</h3>
                <a href="https://spa.archinform.net/index.htm"><img src="imgRecursos/archinform.jpg" /></a>
                <p>Esta base de datos surgió originalmente de los registros de proyectos de construcción de estudiantes
                    de arquitectura y se ha convertido en la base de datos en línea más grande sobre arquitectos y
                    edificios en todos del mundo con más de 9500 obras y proyectos arquitectónicos principalmente del
                    siglo XX hasta la actualidad.</p>
            </div>
            <div>
                <h3>IOP Science</h3>
                <a href="https://iopscience.iop.org/"><img src="imgRecursos/logo_iop.png" width="230px"
                        height="120px" /></a>
                <p>IOP Science es la colección digital definitiva del trabajo publicado por el Institute of Physics
                    desde 1874. Esta colección ofrece el acceso perpetuo e inmediato a más de tres millones de páginas
                    de contenido pertenecientes a todas las revistas publicadas por el IOP.</p>
            </div>
            <div></div>
            <div>
                <h3>La Referencia</h3>
                <a href="http://www.lareferencia.info/es/"><img src="imgRecursos/logo_lareferencia.png" width="230px"
                        height="120px" /></a>
                <p>El portal La Referencia permite explorar la producción científica de las instituciones de educación
                    superior de América Latina.</p>
            </div>
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