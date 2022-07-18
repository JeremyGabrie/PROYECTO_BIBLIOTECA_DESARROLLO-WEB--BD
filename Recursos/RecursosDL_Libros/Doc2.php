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
                            color: white;" href="../../Login/index.php">INICIAR SESIÓN</a>
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
    <link rel="shortcut icon" href="../../imgIndex/libro.jpg" />
    <link rel="stylesheet" href="../../Inicio/CSS/IndexCss.css" />
    <link rel="stylesheet" href="../CSS/Libros.css" />
</head>

<body>
    <!--DIVISION 1 INFORMACIÓN Y LOGIN-->
    <header class="Caja">
        <div class="Caja__Flex">
            <div class="Caja__contentido">
                <img type="image" src="../../Inicio/img/Logos/mapa.png" />
                <p>San Juan de Lurigancho,Lima</p>
            </div>
            <div class="Caja__contentido">
                <img type="image" src="../../Inicio/img/Logos/correo.png" />
                <p>obazan@unfv.edu.pe</p>
            </div>
            <div class="Caja__contentido">
                <img type="image" src="../../Inicio/img/Logos/llamada-telefonica.png" />
                <p>(+51) 748-0888</p>
            </div>
        </div>
        <div class="Caja__login">
            <img type="image" src="../../Inicio/img/Logos/Usuario.png" />
            <li><p class="Login"><?php echo "$_SESSION[Nombre] $_SESSION[Apellido]";?></p>
                <ul>
                    <li><a href="../../HistoriaReservas/HistoriaRes.php">Historial de Reservas</a></li>
                    <li><a href="../../Login/cerrarsesion.php">Cerrar Sesión</a></li>
                </ul>
            </li>
        </div>
    </header>
    <!--DIVISON 2 LOGO -->
    <div class="header__img">
        <a href="../../Inicio/inicio.php">
            <img class="logo" src="../../Inicio/img/Logos/logoBiblio.jpg" />
        </a>
    </div>
    <!--DIVISON DE BARRA DE MENU-->
    <nav class="Navegacion">
        <ul class="Navegacion__OP">
            <li><a class="Inicio__nav" href="../../Inicio/inicio.php">INICIO</a></li>
            <li><a href="../../Nosotros/Nosotros.php">NOSOTROS</a>
            </li>
            <li><a>RECURSOS EN LINEA</a>
                <ul>
                    <li><a href="../../Recursos/RecursosBD.php">Base de Datos</a></li>
                    <li><a href="../../Recursos/RecursosDL.php">Documentación en Linea</a></li>
                    <li><a href="../../Recursos/RecursosRC.php">Revistas en Linea</a></li>
                </ul>
            </li>
            <li><a href="../../Servicios/servicios.php">SERVICIOS</a> </li>
            <li><a href="../../Noticias/noticias.php">NOTICIAS</a></li>
            <li><a class="Fin__nav" href="../../Guias/guias.php">GUIAS</a></li>
        </ul>
    </nav>
    <!--DIVISION DOCUMENTO-->
    <div class="Contenedor__Libro">
        <div>
            <h4>Ingeniería de métodos movimientos y tiempos</h4>
        </div>
        <div class="Contenido__Libro">
            <div class="Libro__Img__2">
            </div>
            <div class="Libro__Datos">
                <p>En todo centro de trabajo, mejorar el rendimiento de los procesos para incrementar la productividad y
                    eficiencia es una constante. Sin embargo, variables relacionadas con el equipo humano, la
                    fabricación de productos, el clima organizacional, las instalaciones y las tecnologías utilizadas
                    pueden afectar los procesos y, por ello, reducir los resultados esperados. Descubrir estas fuentes
                    de ineficiencias y desperdicios con el fin de corregirlos, estandarizarlos y medirlos para
                    contribuir al progreso empresarial es el objetivo de la ingeniería de métodos, movimientos y
                    tiempos.
                </p>
                <ul>
                    <li>Fecha: <span>2009</span></li>
                    <li>Materia: <span>Movimientos y tiempos</span></span></li>
                    <li>Carrera: <span>Ingenieria</span></li>
                    <li>Autor: <span>Palacios Acero, Luis Carlos</span></li>
                    <li>ISBN: <span>978-958-648-624-8</span></li>
                    <li>Categoria: <span>Libro</span></li>
                </ul>
                <form action="Ingresando.php" method="post">
                    <input type="submit" name="Ver" value="Ver Pdf">
                    <input type="hidden" name="url" value="../pdfLibros/Libros/Ingeniería-de-métodos.pdf">
                    <input type="hidden" name="Titulo" value="Ingeniería de métodos movimientos y tiempos">
                    <input type="submit" name="Añadir" value="Añadir Libro">
                </form>
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
                            <img src="../../Inicio/img/Logos/Twitter.png" height="40" width="40" />
                        </a>
                        <br>
                        <p>TWITTER</p>
                    </div>
                    <div>
                        <a href="https://www.youtube.com/channel/UCytMCEa8yYZe-GPGqncll4w">
                            <img src="../../Inicio/img/Logos/youtube.png" height="40" width="40" />
                        </a>
                        <br>
                        <p>YOUTUBE</p>
                    </div>
                    <div>
                        <a href="https://www.facebook.com/Biblioteca-Central-UNFV-100421055641554">
                            <img src="../../Inicio/img/Logos/Facebook.png" height="40" width="40" />
                        </a>
                        <br>
                        <p>FACEBOOK</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>