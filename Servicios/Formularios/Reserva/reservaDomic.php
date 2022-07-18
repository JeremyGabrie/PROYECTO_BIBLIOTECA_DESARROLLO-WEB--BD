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
    <title>Reserva a Domicilio</title>
    <link rel="stylesheet" href="../../CSS/reservaD.css">
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
    <!--CONTENIDO DE LA PAGINA WEB-->
    <div class="contenedor">
        <div class="imagenes">
        </div>
        <div class="formas">
            <h2>FORMAS DE RESERVA</h2>
            <p>En esta sección usted podrá elegir la forma de reserva del material que desea, ya sea
               que usted desea apersonarse a la facultad o si en caso usted desee que se le envie a su
               domicilio mediante la opcion de reservas a domicilio<br><br>
            </p>
            <ul>
                <a href="reservaPres.php"><li>Reserva Presencial<br><br></li></a>
                <a href="reservaDomic.php"><li>Reserva a Domicilio</li></a>
            </ul>
            <img src="../../img/estela.png" class="estela">
        </div>
        <div class="titulo">
            <h3>RESERVAS A DOMICILIO</h3>
        </div>
        <div class="formulario">
            <form action="ConfirmandoReservas/ValidarReservaDom.php" method="post">
                <h4>Dirección</h4>
                <input class="direccion" name="direccion" type="text" placeholder="Ingrese la dirección de su vivenda"><br>
                <h4>Referencia</h4>
                <textarea class="referencia" name="referencia" placeholder="Ingrese una indicación de referencia a su vivenda"></textarea><br>
                <h4>Fecha de Reserva</h4>
                <input class="fecha" name="fecha" type="date"><br>
                <h4>Número Alternativo</h4>
                <input class="numero" name="telefono" type="text" placeholder="Ingrese un numero telefónico alternativo"><br>
                <h4>Persona a Recibir</h4>
                <input class="persona" name="persona" type="text" placeholder="Ingrese el nombre de la persona que recibirá el pedido">
                <div class="reservar">
                    <input class="btnreserva" type="submit" name="Domicilio" value="RESERVAR">
                </div>
           </form>
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