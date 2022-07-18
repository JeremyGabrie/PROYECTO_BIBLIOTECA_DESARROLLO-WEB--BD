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
    <title>Guias</title>
    <link rel="stylesheet" href="CSS/GuiaStyle.css">
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
        <h2 id="Letra" class="Nombre" style="margin-left:520px;">GUIAS</h2>
        <div class="adelante botones">&#62</div>
        <img src="../Inicio/img/img1.jpg" alt="" id="imagen" />
    </div>
    <!--CONTENIDO DE LA PAGINA WEB-->
    <div class="contenedor">
        <div class="imagenes">
        </div>

        <div class="subtitulo1">
            <h3>GUIAS ACADEMICAS</h3>
        </div>

        <div class="imgGuia1">
            <img src="img/SIGB.png " class="guia">
        </div>

        <div class="guia1">
            <p>Manual de usuario del Sistema Integrado de Gestión de Bibliotecas SIGB - UNFV</p>
        </div>
        <div class="btnGuia1V">
            <a href="https://view.officeapps.live.com/op/view.aspx?src=http%3A%2F%2Fbiblioteca.unfv.edu.pe%2Fopac-tmpl%2Fbootstrap%2Fimages%2FMANUAL%2520DE%2520USUARIO-SIGB-UNFV.pptx&wdOrigin=BROWSELINK"
                target="ventana"><input type="button" value="Visualizar"></a>
        </div>
        <div class="btnGuia1D">
            <a href="Doc/manual.pptx" download><input type="button" value="Descargar"></a>
        </div>

        <div class="imgGuia2">
            <img src="img/cientifico.png" class="guia">
        </div>

        <div class="guia2">
            <p>Reglamento del Repositorio Científico de la UNFV</p>
        </div>
        <div class="btnGuia2V">
            <a href="Doc/RepositorioCientifico.pdf" target="ventana"><input type="button" value="Visualizar"></a>
        </div>
        <div class="btnGuia2D">
            <a href="Doc/RepositorioCientifico.pdf" download><input type="button" value="Descargar"></a>
        </div>

        <div class="imgGuia3">
            <img src="img/biblioteca.jpg" class="guia">
        </div>

        <div class="guia3">
            <p>Reglamento del Sistema de Bibliotecas de la UNFV</p>
        </div>
        <div class="btnGuia3V">
            <a href="Doc/ReglamentoSistemaBiblio.pdf" target="ventana"><input type="button" value="Visualizar"></a>
        </div>
        <div class="btnGuia3D">
            <a href="Doc/ReglamentoSistemaBiblio.pdf" download><input type="button" value="Descargar"></a>
        </div>

        <div class="imgGuia4">
            <img src="img/urkund.jpg" class="guia">
        </div>

        <div class="guia4">
            <p>Manual de usuario del sistema antiplagio URKUND</p>
        </div>
        <div class="btnGuia4V">
            <a href="Doc/GuiaAntiplagio.pdf" target="ventana"><input type="button" value="Visualizar"></a>
        </div>
        <div class="btnGuia4D">
            <a href="Doc/GuiaAntiplagio.pdf" download><input type="button" value="Descargar"></a>
        </div>

        <div class="visual">
            <iframe src="" name="ventana" class="iframe"></iframe>
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