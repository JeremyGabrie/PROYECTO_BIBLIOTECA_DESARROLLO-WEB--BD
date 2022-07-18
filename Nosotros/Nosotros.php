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
    <title>Nosotros</title>
    <link rel="stylesheet" href="CSS/NosotrosStyle.CSS">
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
        <h2 id="Letra" class="Nombre" style="margin-left:450px;">NOSOTROS</h2>
        <div class="adelante botones">&#62</div>
        <img src="../Inicio/img/img1.jpg" alt="" id="imagen" />
    </div>
    <!--CONTENIDO DE LA PAGINA WEB-->
    <div class="contenedor">
        <div class="imagenes">
        </div>

        <div class="subtitulo1">
            <h3>MISIÓN Y VISIÓN</h3>
        </div>

        <div class="mision">
            <h1> MISIÓN</h1>
            <p><br>"La Biblioteca especializada de la FIIS es un espacio cultural que tiene como misión apoyar a la
                comunidad universitaria
                en las labores de docencia, investigación y aprendizaje, mediante servicios y espacios diseñados
                especialmente para
                propiciar el acceso de todos sus miembros a recursos de información de calidad académica, fomentando el
                uso de
                tecnología y en concordancia con las políticas y planes institucionales"</p>

        </div>
        <div class="imgVM">
            <img src="img/mision.png" class="imgmis">
        </div>
        <div class="vision">
            <h1>VISIÓN</h1>
            <p>
                <br><br>"Ser un centro de documentación modelo, moderno y especializado, entre las unidades de
                información de rango universitario
                cumpliendo con las expectativas puestas por los estudiantes, docentes y personal administrativos de
                nuestra facultad,
                que optan por la búsqueda de conocimiento"
            </p>
        </div>

        <div class="subtitulo2">
            <h3>FUNCIONES</h3>
        </div>
        <div class="funciones">
            <p>
            <ul>
                <li> Clasificar y codfica el amterial bibliografico, asi como elabora el inventario de los mismos</li>
                <li> Catalogación del material bibliografico e ingreso de los mismos a la base de datos</li>
                <li> Elabora y evalua el reglamento de la biblioteca</li>
                <li> Descarta la biblioteca desactualizada y obsoleta de los stands de libros y oficinas</li>
                <li> Reune informacion especializada y actualizada, poniendola al alcance de los usuarios</li>
                <li> Organiza los servicios diferenciandose de lectura, consulta y audiovisual que facilite el estudio,
                    la investigacion y el apoyo academico</li>
            </ul>
            </p>
        </div>

        <div class="subtitulo3">
            <h3>ENCARGADOS</h3>
        </div>
        <DIV class="imgBiblio">
            <h1> BIBLIOTECARIO</h1>
            <img src="img/bibliotecario.jpg" class="img1">
        </DIV>
        <div class="infEncarg">
            <h3><br>BIBLIOTECARIO</h3>
            <UL>
                <li>Bach. Oscar Abraham Bazan Arias</li>
                <li>obazan@unfv.edu.pe</li>
            </UL>
            <h3><BR>RESPONSABLE</h3>
            <UL>
                <li>Sra. Fabiola Bell Michan Cogorno</li>
                <li>fmichan@unfv.edu.pe</li>
            </UL>

        </div>
        <div class="imgRespon">
            <h1> RESPONSABLE</h1>
            <img src="img/encargada.png" class="img2">
        </div>

        <div class="subtitulo4">
            <h3>CATEGORIAS</h3>
        </div>

        <div class="item1">
            <section class="Doc">
                <img src="img/Doc.jfif" class="imgDoc">
                <section class="DocText">
                    <h2>Documentos</h2>
                    <p>Podra encontrar documentacion variada sobre cualquier tema de su interes, ya sea desde temas
                        básicos de estudio
                        hasta documentos informativos sobre nuestra facultad
                    </p>
                </section>
            </section>
        </div>
        <div class="item2">
            <section class="Doc">
                <img src="img/Pon.jfif" class="imgDoc">
                <section class="DocText">
                    <h2>Ponencias</h2>
                    <p>Al llegar a la seccion de Ponencias usted podra visualizar material recopilatorio sobre las
                        diferentes ponencias brindadas
                        por distinguidos academicos dentro de nuestra Facultad
                    </p>
                </section>
            </section>
        </div>
        <div class="item3">
            <section class="Doc">
                <img src="img/Lib.jfif" class="imgDoc">
                <section class="DocText">
                    <h2>Libros</h2>
                    <p>Interesado por la busqueda de conocimientos nuevos?. Dentro de esta biblioteca virtual podra
                        encontrar diferentes libros de
                        su agrado que lo ayudaran en cualquier aprieto
                    </p>
                </section>
            </section>
        </div>
        <div class="item4">
            <section class="Doc">
                <img src="img/Tes.jfif" class="imgDoc">
                <section class="DocText">
                    <h2>Tesis</h2>
                    <p>Recopilacion de las tesis realizadas por egresados de las diferentes carreras de nuestra facultad
                    </p>
                </section>
            </section>
        </div>
        <div class="item5">
            <section class="Doc">
                <img src="img/Art.jfif" class="imgDoc">
                <section class="DocText">
                    <h2>Articulos</h2>
                    <p>Adenas de documentacion clasica podra encontrar referencias de diferentes articulos cientifcos
                        que lo ayudaran
                        a encontrar recursos importantes
                    </p>
                </section>
            </section>
        </div>
        <div class="item6">
            <section class="Doc">
                <img src="img/Rev.jfif" class="imgDoc">
                <section class="DocText">
                    <h2>Revistas</h2>
                    <p>Las revistas academicas o de interes academico tambien se hacen presente para el diferente
                        alumnado de todas las
                        carreras de nuestra facultad
                    </p>
                </section>
            </section>
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