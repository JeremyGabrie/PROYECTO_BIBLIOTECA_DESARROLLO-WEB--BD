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
    <title>Apoyanos</title>
    <link rel="stylesheet" href="CSS/apoyo.css" />
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
    <!--CONTENIDO DE LA PÁGINA WEB-->
    <div class="contenedor">
        <div class="imagenes">
        </div>
        <div class="informacion">
            <h2>¿POR QUÉ DONAR Y NO VENDER?</h2>
            <p>Actualmente vivimos en una sociedad donde la publicadad de consumir es muy activa,
                la venta de libros no se queda atrás ya que en las diferentes entidades educativas se solicita
                un material académico el cual requiere ser comprado, al donar un libro ayudamos no solo en la parte
                económica
                a cualquier persona que no tenga las condiciones económicas de adquirir un material nuevo sino que
                compartimos
                el conocimiento ya adquirido a tráves de apuntes y notas. Conociendo ello donar un libro ayuda a las
                personas
                y permite ampliar el repositorio academico de cualquier biblioteca<br><br>
            </p>
            <img src="img/librodonar.png">
        </div>
        <div class="titulo">
            <h3>DONACIÓN DE LIBROS</h3>
        </div>
        <form action="resumenDona.php" method="post" enctype="multipart/form-data">
        <div class="formulario">
                <h4>Nombre y Apellido</h4>
                <input name="datosper" class="nombre" type="text" placeholder="Ingrese su nombre y Apellido" value="<?php echo "$_SESSION[Nombre] $_SESSION[Apellido]"?>"><br>
                <h4>Distrito<br></h4>
                <select name="distrito" class="distrito">
                    <option checked="checked">Seleccionar</option>
                    <option>Santa Anita</option>
                    <option>El Agustino</option>
                    <option>Ate Vitarte</option>
                    <option>San Juan de Lurigancho
                    <option>Crabayllo</option>
                    <option>La Molina</option>
                    <option>Chorrillos</option>
                    <option>Lima</option>
                    <option>La Victoria</option>
                    <option>Los Olivos</option>
                    <option>Miraflores</option>
                    <option>Pueblo Libre</option>
                    <option>San Borja</option>
                </select><br>

                <h4>Dirección</h4>
                <input name="direccion" class="direccion" type="text" placeholder="Ingrese la dirección de su vivenda"><br>
                <h4>Teléfono</h4>
                <input name="telefono" class="telefono" type="text" placeholder="Ingresesu numero telefónico"><br>
                <h4>Tipo de Material</h4>
                <select name="tipomater" class="tipo">
                    <option>Seleccionar</option>
                    <option>Libro</option>
                    <option>Artículo</option>
                    <option>Tesis</option>
                    <option>Revista</option>
                    <option>Otros</option>
                </select><br>
                <h4>Condición del Material</h4>
                <textarea name="condicionmater" class="condicion"
                    placeholder="Describa brevemente la condición actual del material"></textarea><br>
                <h4>Cantidad</h4>
                <input name="cantidad" class="cantidad" type="number" placeholder="Ingrese la cantidad"><br>
                <h4>Subir fotos del material (opcional)</h4>
                <input name="archivo" class="archivo" type="file">
        </div>
        <div class="donar">
            <input name="btndonar" class="btndonar" type="submit" value="DONAR">
        </div>
        </form>
        <div class="vacio"></div>
        <div class="vacio1"></div>
        <div class="vacio2"></div>
    </div>
    <br><br><br><br><br>
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
</body>

</html>