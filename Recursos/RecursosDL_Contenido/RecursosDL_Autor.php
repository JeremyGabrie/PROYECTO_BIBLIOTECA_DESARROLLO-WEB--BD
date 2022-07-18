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
    <link rel="shortcut icon" href="../../Inicio/img/libro.jpg" />
    <link rel="stylesheet" href="../../Inicio/CSS/IndexCss.css" />
    <link rel="stylesheet" href="../CSS/Recursos.css" />
</head>

<body>
    <!--DIVISION 1 INFORMACIÓN Y LOGIN-->
    <header class="Caja">
        <div class="Caja__Flex">
            <div class="Caja__contentido">
                <img type="image" src="../../Inicio/img/Logos/mapa.png" />
                <p>Av. Óscar R. Benavides 450, Cercado de Lima 15082</p>
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
    <!--DIVISION IMG-->
    <div class="Contenedor__Imagen">
        <div class="atras botones">&#60</div>
        <h2 id="Letra" class="Nombre" style="margin-left:150px;">DOCUMENTACIÓN EN LINEA<br><span id="filtro">AUTOR</span></h2>
        <div class="adelante botones">&#62</div>
        <img src="../../Inicio/img/img1.jpg" alt="" id="imagen" />
    </div>
    <!--DIVISION CONTENIDO-->
    <div class="Contenido__DL">
        <div class="Contenido__DL__Contenido">
            <div class="Contenido__DL__libros">
                <div class="contenido__form">
                    <span class="titulo__busqueda">Busqueda por Autor</span>
                    <input size="50px" type="text" id="busqueda" placeholder="Escriba el nombre del Autor">
                </div>
                <div class="Contenido__DL__libros__1">
                    <img src="../../Recursos/imgLibros/DL1.jpg">
                    <div>
                        <h4>Titulo: <span>Técnicas de análisis multivariante de datos. Aplicaciones con SPSS</span>
                        </h4>
                        <p>En este libro, se presentan las técnicas de análisis exploratorio de
                            datos para el
                            estudio de grandes conjuntos de datos, tratamiento de los valores atípicos e
                            imputación de datos
                            ausentes., métodos factoriales-análisis en componentes principales, análisis
                            factorial,
                            análisisde correspondencias<a href="RecursosDL_Libros/Doc1.php"
                                style="color: blue;">...ver más</a>.</p>
                        <div>
                            <p>Fecha: <span>2006</span></p>
                            <p>Materia: <span>Análisis multivariante</span></span></p>
                            <p>Carrera: <span>Ingenieria de Sistemas</span></p>
                            <p>Autor: <span>Cesar Perez Lopez</span></p>
                            <p>Categoria: <span>Libro</span></p>
                        </div>
                    </div>
                    <div class="detalles" style="display: none;">
                        <p class="titulo">Técnicas de análisis multivariante de datos.
                            Aplicaciones con SPSS</p>
                        <p class="fecha">2006</p>
                        <p class="materia">Análisis multivariante</p>
                        <p class="ingenieria">Ingenieria de Sistemas</p>
                        <p class="autor">Cesar Perez Lopez</p>
                        <p class="categoria">libro</p>
                        </p>
                    </div>
                </div>
                <div class="Contenido__DL__libros__1">
                    <img src="../../Recursos/imgLibros/DL2.jpg">
                    <div>
                        <h4>Titulo: <span>Ingeniería de métodos movimientos y tiempos</span></h4>
                        <p>En todo centro de trabajo, mejorar el rendimiento de los procesos para incrementar la
                            productividad y eficiencia es una constante. Sin embargo, variables relacionadas con el
                            equipo humano, la fabricación de productos, el clima organizacional, las instalaciones y
                            las tecnologías utilizadas<a href="../RecursosDL_Libros/Doc2.php"
                                style="color: blue;">...ver más</a>.</p>
                        <div>
                            <p>Fecha: <span>2009</span></p>
                            <p>Materia: <span>Movimientos y tiempos</span></span></p>
                            <p>Carrera: <span>Ingenieria</span></p>
                            <p>Autor: <span>Palacios Acero, Luis Carlos</span></p>
                            <p>Categoria: <span>Libro</span></li>
                        </div>
                    </div>
                    <div class="detalles" style="display: none;">
                        <p class="titulo">Ingeniería de métodos movimientos y tiempos</p>
                        <p class="fecha">2009</p>
                        <p class="materia">Movimientos y tiempos</p>
                        <p class="carrera">Ingenieria</p>
                        <p class="autor">Palacios Acero, Luis Carlos</p>
                        <p class="categoria">libro</p>
                    </div>
                </div>
                <div class="Contenido__DL__libros__1">
                    <img src="../../Recursos/imgLibros/DA1.jpg">
                    <div>
                        <h4>Titulo: <span>Introducción a los Conceptos Básicos de la Teoría General de
                                Sistemas</span></h4>
                        <p>En un sentido amplio, la Teoría General de Sistemas (TGS) se presenta como una forma
                            sistemática y científica de aproximación y representación de la realidad y, al mismo
                            tiempo, como
                            una orientación hacia una práctica estimulante para formas de trabajo
                            transdisciplinarias.
                            <a href="../RecursosDL_Libros/Doc3.php" style="color: blue;">...ver más</a>.
                        </p>
                        <div>
                            <p>Fecha: <span>1998</span></p>
                            <p>Materia: <span>Teoria General de sistemas</span></span></p>
                            <p>Carrera: <span>Ingenieria de Sistemas</span></p>
                            <p>Autor: <span>Marcelo Arnold</span></p>
                            <p>Categoria: <span>Articulo</span></p>
                        </div>
                    </div>
                    <div class="detalles" style="display: none;">
                        <p class="titulo">Introducción a los Conceptos Básicos de la Teoría General de
                            Sistemas</p>
                        <p class="fecha">1998</p>
                        <p class="materia">Teoria General de sistemas</p>
                        <p class="carrera">Ingenieria de Sistemas</p>
                        <p class="autor">Marcelo Arnold</p>
                        <p class="categoria">articulo</p>
                    </div>
                </div>
                <div class="Contenido__DL__libros__1">
                    <img src="../../Recursos/imgLibros/DA2.jpg">
                    <div>
                        <h4>Titulo: <span>Producción Científica en la Base de Datos Scopus de una Universidad
                                Privada del Perú</span></h4>
                        <p>Se realizó un estudio bibliométrico analizando los artículos publicados en la base de
                            datos
                            Scopus que registraban
                            como afiliación del autor a la USMP, y las variables: número de publicaciones, áreas,
                            autores, idioma, tipo de publicación,
                            revista, colaboración<a href="../RecursosDL_Libros/Doc4.php" style="color: blue;">...ver
                                más</a>.</p>
                        <div>
                            <p>Fecha: <span>2021</span></p>
                            <p>Materia: <span>Base de Datos</span></span></p>
                            <p>Carrera: <span>Ingenieria de Sistemas</span></p>
                            <p>Autor: <span>Rodrigo Livia-Ortiz</span></p>
                            <p>Categoria: <span>Articulo</span></p>
                        </div>
                    </div>
                    <div class="detalles" style="display: none;">
                        <p class="titulo">Producción Científica en la Base de Datos Scopus de una Universidad
                            Privada del Perú</p>
                        <p class="fecha">2021</p>
                        <p class="materia">Base de Datos</p>
                        <p class="carrera">Ingenieria de Sistemas</p>
                        <p class="autor">Rodrigo Livia-Ortiz
                        <p class="categoria">articulo</p>
                    </div>
                </div>
                <div class="Contenido__DL__libros__1">
                    <img src="../../Recursos/imgLibros/DT1.jpg">
                    <div>
                        <h4>Titulo: <span>La Inteligencia Artificial y el gobienro electrónico
                                en el instituto de gobernabilidad y tecnologia</span></h4>
                        <p>En estos tiempos con el avance de las nuevas tecnologías de información y la
                            inteligencia artificial podemos realizar experimentos con algoritmos en el desarrollo
                            de software. También tenemos investigaciones dedicadas a diseñar y desarrollar
                            algoritmos que sean<a href="../RecursosDL_Libros/Doc6.php" style="color: blue;">...ver
                                más</a>.</p>
                        <div>
                            <p>Fecha: <span>2018</span></p>
                            <p>Materia: <span>Inteligencia Artificial</span></span></p>
                            <p>Carrera: <span>Ingenieria de Sistemas</span></p>
                            <p>Autor: <span>Mugruzu Torres</span></p>
                            <p>Categoria: <span>Tesis</span></p>
                        </div>
                    </div>
                    <div class="detalles" style="display: none;">
                        <p class="titulo">La Inteligencia Artificial y el gobienro electrónico
                            en el instituto de gobernabilidad y tecnologia</p>
                        <p class="fecha">2018</p>
                        <p class="materia">Inteligencia Artificial</p>
                        <p class="carrera">Ingenieria de Sistemas</p>
                        <p class="autor">Mugruzu Torres</p>
                        <p class="tesis">tesis</p>
                    </div>
                </div>
                <div class="Contenido__DL__libros__1">
                    <img src="../../Recursos/imgLibros/DT2.jpg">
                    <div>
                        <h4>Titulo: <span>Propuesta de mejora del modelo de atención al cliente para optimizar
                                los servicios en la municipalidad provincial de Huari</span></h4>
                        <p>El presente trabajo deviene de la experiencia en la municipalidad en un encuentro
                            vivencial
                            de
                            la debilidad de atención al usuario; con el objetivo de optimizar los procesos y dotarla
                            de
                            herramientas informáticas para mejorar la atención cuidando la imagen institucional,
                            desarrolle
                            este trabajo como una<a href="../RecursosDL_Libros/Doc5.php" style="color: blue;">...ver
                                más</a>.</p>
                        <div>
                            <p>Fecha: <span>2021</span></p>
                            <p>Materia: <span>Modelos</span></span></p>
                            <p>Carrera: <span>Ingenieria Industrial</span></p>
                            <p>Autor: <span>Marco Antonio</span></p>
                            <p>Categoria: <span>Tesis</span></p>
                        </div>
                    </div>
                    <div class="detalles" style="display: none;">
                        <p class="titulo">La Inteligencia Artificial y el gobienro electrónico
                            en el instituto de gobernabilidad y tecnologia</p>
                        <p class="fecha">2021</p>
                        <p class="materia">Modelos</p>
                        <p class="carrera">Ingenieria Industrial</p>
                        <p class="autor">Marco Antonio</p>
                        <p class="categoria">tesis</p>
                    </div>
                </div>
                <div class="Contenido__DL__libros__1">   <!--Contenedor general, para el filtrado usando JS-->
                    <img src="../../Recursos/imgLibros/A1I.JPG"> <!-- imagen representativa del libro-->
                    <div>
                        <h4>Titulo: <span>Conocimientos e innovación tecnológica en la ingeniería industrial       <!--Titulo del material con H4--><!--Nombre del material con el span-->
                                    </span></h4>
                        <p>Permanentemente, las empresas se encuentran en un proceso de  rediseño y mejora en el que   <!--Resumen del material con la etiqueta p-->
                            la innovacion juega un papel central en el logro de un desempeño mas productivo,
                            competittivo y rentable. En este sentido, la ingeneiria industrial ha jugado un papel
                            notable desde su aparicion, a la vez que ha evolucionado su vision, rango de accion y aplicacion
                             aspectos que son patentes en los nuevos conceptos que definen esta disciplina y los topicos
                             que se abordan como parte del campo laboral <a href="../RecursosDL_Libros/" style="color: blue;">...ver      <!--envio a pagina de la informacion al libro-->
                                más</a>.
                        </p>
                        <div>
                            <p>Fecha: <span>2017</span></p>
                            <p>Materia: <span>Tecnologia industrial</span></span></p>
                            <p>Carrera: <span>Ingenieria Industrial</span></p>
                            <p>Autor: <span>Mario Aguilar Fernandez</span></p>
                            <p>Categoria: <span>Articulo</span></p>
                        </div>
                    </div>
                    <div class="detalles" style="display: none;">
                        <p class="titulo">Conocimientos e innovación tecnológica en la ingeniería industrial</p>
                        <p class="fecha">2017</p>                   <!--subtitulo materia la calse sirve para el css-->
                        <p class="materia">Tecnologia industrial</p>                       <!--subtitulo carrera la calse sirve para el css-->
                        <p class="carrera">Ingenieria Industrial</p>                <!--subtitulo autor la calse sirve para el css-->
                        <p class="autor">Mario Aguilar Fernandez        <!--subtitulo categoria la calse sirve para el css-->
                        <p class="categoria">articulo</p>
                    </div>
                </div>
                <div class="Contenido__DL__libros__1">   <!--Contenedor general, para el filtrado usando JS-->
                    <img src="../../Recursos/imgLibros/A2I.JPG"> <!-- imagen representativa del libro-->
                    <div>
                        <h4>Titulo: <span>El enfoque y rol del ingeniero industrial para la gestion y decision en      <!--Titulo del material con H4-->
                                el mundo de las organizaciones</span></h4>                            <!--Nombre del material con el span-->
                        <p>El objetivo del presente estudio es mostrar la perspectiva sistémica del ingeniero industrial para la toma de decisiones derivadas <!--Resumen del material con la etiqueta p-->
                            del nuevo rol gerencial ante los retos del entorno y las orientaciones diversas para la percepción de problemas, elección de
                            alternativas y optimización de los resultados. <a href="../RecursosDL_Libros/" style="color: blue;">...ver      <!--envio a pagina de la informacion al libro-->
                                más</a>.
                        </p>
                        <div>
                            <p>Fecha: <span>2012</span></p>
                            <p>Materia: <span>Introduccion a la Ingenieria Industrial</span></span></p>
                            <p>Carrera: <span>Ingenieria Industrial</span></p>
                            <p>Autor: <span>Adolfo Oswaldo Acevedo Borrego</span></p>
                            <p>Categoria: <span>Articulo</span></p>
                        </div>
                    </div>
                    <div class="detalles" style="display: none;">                   <!--Div que nos sirve para el filtrado de busqueda escrita-->
                        <p class="titulo">El enfoque y rol del ingeniero industrial para la gestion y decision en      <!--Titulo del material con H4-->
                            el mundo de las organizaciones</p>
                        <p class="fecha">2012</p>                   <!--clase que ayuda para el filtrado-->
                        <p class="materia">Introduccion a la Ingenieria Industrial</p>        <!--clase que ayuda para el filtrado-->
                        <p class="carrera">Ingenieria Industrial</p>       <!--clase que ayuda para el filtrado-->
                        <p class="autor">Adolfo Oswaldo Acevedo Borrego</p>        <!--clase que ayuda para el filtrado-->
                        <p class="categoria">articulo</p>
                    </div>
                </div>
                <div class="Contenido__DL__libros__1">   <!--Contenedor general, para el filtrado usando JS-->
                    <img src="../../Recursos/imgLibros/A3T.JPG"> <!-- imagen representativa del libro-->
                    <div>
                        <h4>Titulo: <span>Del concepto de ingenieria de transito al de movilidad urbana sotenible      <!--Titulo del material con H4-->
                                    </span></h4>                                                                <!--Nombre del material con el span-->
                        <p>El estudio de la movilidad en la ciudades se ha valido de ciencias aplicadas como la
                            Ingeniería de Tránsito que, con base en estudios especializados de variables como
                            el volumen del tráfico, la velocidad y la densidad, además de inventarios de infraes-
                            tructuras, la generación de modelos de pronóstico y la modelación con el empleo
                            de software, han facilitado la caracterización del comportamiento del tráfico, así
                            como el diseño de medidas para su mejoramiento, orientadas a la planeación de la
                            operación del tránsito y la intervención física de la infraestructura del transporte<a href="../RecursosDL_Libros/Doc7.php" style="color: blue;">...ver      <!--envio a pagina de la informacion al libro-->
                                más</a>.
                        </p>
                        <div>
                            <p>Fecha: <span>2017</span></p>
                            <p>Materia: <span>Ingenieria del tránsito</span></span></p>
                            <p>Carrera: <span>Ingenieria de Transportes</span></p>
                            <p>Autor: <span>Julian Rodrigo Quintero Gonzales</span></p>
                            <p>Categoria: <span>Articulo</span></p>
                        </div>
                    </div>
                    <div class="detalles" style="display: none;">                   <!--Div que nos sirve para el filtrado de busqueda escrita-->
                        <p class="titulo">Del concepto de ingenieria de transito al de movilidad urbana sotenible </p>
                        <p class="fecha">2017</p>                   <!--clase que ayuda para el filtrado-->
                        <p class="materia">Ingenieria del tránsito</p>        <!--clase que ayuda para el filtrado-->
                        <p class="carrera">Ingenieria de Transportes</p>       <!--clase que ayuda para el filtrado-->
                        <p class="autor">Julian Rodrigo Quintero Gonzales</p>       <!--clase que ayuda para el filtrado-->
                        <p class="categoria">articulo</p>
                    </div>
                </div>
                <div class="Contenido__DL__libros__1">   <!--Contenedor general, para el filtrado usando JS-->
                    <img src="../../Recursos/imgLibros/A4T.JPG"> <!-- imagen representativa del libro-->
                    <div>
                        <h4>Titulo: <span>Sistemas de metodología orientada en acreditación
                            de programas académicos de las universidades                                 <!--Titulo del material con H4-->
                            </span></h4>                                                         <!--Nombre del material con el span-->
                        <p>Se propone metodologías de gestión de calidad y métodos colaborativos 
                            (ágiles) con el objetivo de proponer e implementar una metodología que oriente a 
                            la acreditación de los programas académicos de las universidades nacionales. La 
                            aplicación piloto fue realizada en la carrera profesional de ingeniería de sistemas 
                            de la Universidad Nacional Federico Villareal <a href="../RecursosDL_Libros/" style="color: blue;">...ver      <!--envio a pagina de la informacion al libro-->
                                más</a>.
                        </p>
                        <div>
                            <p>Fecha: <span>2021</span></p>
                            <p>Materia: <span>Teoria General de Sistemas</span></span></p>
                            <p>Carrera: <span>Ingenieria de Sistemas</span></p>
                            <p>Autor: <span>Jorge Lira Camargo</span></p>
                            <p>Categoria: <span>Articulo</span></p>
                        </div>
                    </div>
                    <div class="detalles" style="display: none;">                   <!--Div que nos sirve para el filtrado de busqueda escrita-->
                        <p class="titulo">Sistemas de metodología orientada en acreditación
                            de programas académicos de las universidades</p>
                        <p class="fecha">2021</p>                   <!--clase que ayuda para el filtrado-->
                        <p class="materia">Teoria General de Sistemas</p>        <!--clase que ayuda para el filtrado-->
                        <p class="carrera">Ingenieria de Sistemas</p>       <!--clase que ayuda para el filtrado-->
                        <p class="autor">Jorge Lira Camargo</p>       <!--clase que ayuda para el filtrado-->
                        <p class="categoria">articulo</p>
                    </div>
                </div>
                <div class="Contenido__DL__libros__1">   <!--Contenedor general, para el filtrado usando JS-->
                    <img src="../../Recursos/imgLibros/L1S.JPG"> <!-- imagen representativa del libro-->
                    <div>
                        <h4>Titulo: <span>Sistemas y Organizaciones   <!--Titulo del material con H4-->
                                        <br>PARTE I: Teoría General de sistemas</span></h4>                                                                <!--Nombre del material con el span-->
                        <p>Defininimos la ingenieria de sistemas como un metodo de resolucion de problemas complejos   <!--Resumen del material con la etiqueta p-->
                            donde figura la tecnologia, sin estar limtado a ella, en el contexto de los entrnos fisicos,
                            sociales, economicos y culturales en lo que estos problemas existen. El proceso de desarrollar
                            y producir sistemas artificiales de forma logica y ordenada se realiza mejor a traves de una 
                            buena Ingenieria de Sistemas<a href="../RecursosDL_Libros/" style="color: blue;">...ver      <!--envio a pagina de la informacion al libro-->
                                más</a>.
                        </p>
                        <div>
                            <p>Fecha: <span>2020</span></p>
                            <p>Materia: <span>Teoria de Sistemas</span></span></p>
                            <p>Carrera: <span>Ingenieria de Sistemas</span></p>
                            <p>Autor: <span>Emilio Eugenio Lorenzon</span></p>
                            <p>Categoria: <span>Libro</span></p>
                        </div>
                    </div>
                    <div class="detalles" style="display: none;">                   <!--Div que nos sirve para el filtrado de busqueda escrita-->
                        <p class="titulo">Sistemas y Organizaciones   <!--Titulo del material con H4-->
                            <br>PARTE I: Teoría General de sistemas</p>
                        <p class="fecha">2020</p>                   <!--clase que ayuda para el filtrado-->
                        <p class="materia">Teoria de Sistemas</p>        <!--clase que ayuda para el filtrado-->
                        <p class="carrera">Ingenieria de Sistemas</p>       <!--clase que ayuda para el filtrado-->
                        <p class="autor">Emilio Eugenio Lorenzon</p>       <!--clase que ayuda para el filtrado-->
                        <p class="categoria">libro</p>
                    </div>
                </div>
                <div class="Contenido__DL__libros__1">   <!--Contenedor general, para el filtrado usando JS-->
                    <img src="../../Recursos/imgLibros/L2I.JPG"> <!-- imagen representativa del libro-->
                    <div>
                        <h4>Titulo: <span>Manual de Diseño Industrial       <!--Titulo del material con H4-->
                                    </span></h4>                             <!--Nombre del material con el span-->
                        <p>La actividad profesional del diseño industrial, encara un complejo proceso a seguir en la
                            generacion de ideas o conceptos de diseño, ya que los productos a concebir cuentan con
                            distintos caracteres de uso, sean diferentes, "no es posible establecer hasta no conocer
                            el problema de diseño a resolver, criterios o normas para solucionarlos".<a href="../RecursosDL_Libros/" style="color: blue;">...ver      <!--envio a pagina de la informacion al libro-->
                                más</a>.
                        </p>
                        <div>
                            <p>Fecha: <span>2015</span></p>
                            <p>Materia: <span>Diseño Industrial</span></span></p>
                            <p>Carrera: <span>Ingenieria Industrial</span></p>
                            <p>Autor: <span>Gerardo Rodriguez</span></p>
                            <p>Categoria: <span>Libro</span></p>
                        </div>
                    </div>
                    <div class="detalles" style="display: none;">                   <!--Div que nos sirve para el filtrado de busqueda escrita-->
                        <p class="titulo">Manual de Diseño Industrial</p>
                        <p class="fecha">2015</p>                   <!--clase que ayuda para el filtrado-->
                        <p class="materia">Diseño Industrial</p>        <!--clase que ayuda para el filtrado-->
                        <p class="carrera">Ingenieria Industrial</p>       <!--clase que ayuda para el filtrado-->
                        <p class="autor">Gerardo Rodriguez</p>       <!--clase que ayuda para el filtrado-->
                        <p class="categoria">libro</p>
                    </div>
                </div>
                <div class="Contenido__DL__libros__1">   <!--Contenedor general, para el filtrado usando JS-->
                    <img src="../../Recursos/imgLibros/L3A.JPG"> <!-- imagen representativa del libro-->
                    <div>
                        <h4>Titulo: <span>Agroindustria para el desarrollo</span></h4>                                       <!--Nombre del material con el span-->
                        <p>El desarrollo de agroindustrias competitivas es crucial para generar oportunidades               <!--Resumen del material con la etiqueta p-->
                            de empleo e ingresos. Contribuye, además, a mejorar la calidad de los productos
                            agrícolas y su demanda. Las agroindustrias tienen el potencial de generar empleo
                            para la población rural, no sólo a nivel agrícola, sino también en actividades fuera
                            de la explotación como manipulación, envasado, procesamiento, transporte y
                            comercialización de productos alimentarios y agrícolas<a href="../RecursosDL_Libros/" style="color: blue;">...ver      <!--envio a pagina de la informacion al libro-->
                                más</a>.
                        </p>
                        <div>
                            <p>Fecha: <span>2013</span></p>
                            <p>Materia: <span>Desarrollo Agroindustrial</span></span></p>
                            <p>Carrera: <span>Ingenieria Agroindustrial</span></p>
                            <p>Autor: <span>Carlos A. da Silva</span></p>
                            <p>Categoria: <span>Libro</span></p>
                        </div>
                    </div>
                    <div class="detalles" style="display: none;">                   <!--Div que nos sirve para el filtrado de busqueda escrita-->
                        <p class="titulo"></p>
                        <p class="fecha">2013</p>                   <!--clase que ayuda para el filtrado-->
                        <p class="materia">Desarrollo Agroindustrial</p>        <!--clase que ayuda para el filtrado-->
                        <p class="carrera">Ingenieria Agroindustrial</p>       <!--clase que ayuda para el filtrado-->
                        <p class="autor">Carlos A. da Silva</p>       <!--clase que ayuda para el filtrado-->
                        <p class="categoria">libro</p>
                    </div>
                </div>
                <div class="Contenido__DL__libros__1">   <!--Contenedor general, para el filtrado usando JS-->
                    <img src="../../Recursos/imgLibros/L4T.JPG"> <!-- imagen representativa del libro-->
                    <div>
                        <h4>Titulo: <span>Introduccion a la Econometria       <!--Titulo del material con H4-->
                                </span></h4>                                                                <!--Nombre del material con el span-->
                        <p>Se realizó un estudio bibliométrico analizando los artículos publicados en la base de    <!--Resumen del material con la etiqueta p-->
                            datos
                            Scopus que registraban
                            como afiliación del autor a la USMP, y las variables: número de publicaciones, áreas,
                            autores, idioma, tipo de publicación,
                            revista, colaboración<a href="../RecursosDL_Libros/" style="color: blue;">...ver      <!--envio a pagina de la informacion al libro-->
                                más</a>.
                        </p>
                        <div>
                            <p>Fecha: <span>2021</span></p>
                            <p>Materia: <span>Econometria</span></span></p>
                            <p>Carrera: <span>Ingenieria de Transportes</span></p>
                            <p>Autor: <span>James H. Stock</span></p>
                            <p>Categoria: <span>Libro</span></p>
                        </div>
                    </div>
                    <div class="detalles" style="display: none;">                   <!--Div que nos sirve para el filtrado de busqueda escrita-->
                        <p class="titulo">Introduccion a la Econometria </p>
                        <p class="fecha">2021</p>                   <!--clase que ayuda para el filtrado-->
                        <p class="materia">Econometria</p>        <!--clase que ayuda para el filtrado-->
                        <p class="carrera">Ingenieria de Transportes</p>       <!--clase que ayuda para el filtrado-->
                        <p class="autor">James H. Stock</p>       <!--clase que ayuda para el filtrado-->
                        <p class="categoria">libro</p>
                    </div>
                </div>
                <div class="Contenido__DL__libros__1">   <!--Contenedor general, para el filtrado usando JS-->
                    <img src="../../Recursos/imgLibros/T1S.JPG"> <!-- imagen representativa del libro-->
                    <div>
                        <h4>Titulo: <span>Metodologia de los siete pasos para mejora de procesos en una empresa avícola       <!--Titulo del material con H4-->
                                </span></h4>                                                                <!--Nombre del material con el span-->
                        <p>El presente trabajo de investigación está basado en la metodología de
                            los 7 pasos para la mejora de la calidad y ha sido desarrollado con la
                            finalidad de mejorar los procesos estratégicos que existen en la empresa
                            avícola San Fernando S.A.
                            Es por eso que se realizó un minucioso análisis interno de los
                            procedimientos, los cuales se incorporaron con el concepto de misión,
                            visión y los valores de la empresa, ha sido posible poder delimitar
                            objetivos de largo plazo asimismo con las estrategias que posibiliten
                            lograrlos<a href="../RecursosDL_Libros/" style="color: blue;">...ver      <!--envio a pagina de la informacion al libro-->
                                más</a>.
                        </p>
                        <div>
                            <p>Fecha: <span>2021</span></p>
                            <p>Materia: <span>Metodologias</span></span></p>
                            <p>Carrera: <span>Ingenieria de Sistemas</span></p>
                            <p>Autor: <span>Mauricio Laiza Emiterio</span></p>
                            <p>Categoria: <span>Tesis</span></p>
                        </div>
                    </div>
                    <div class="detalles" style="display: none;">                   <!--Div que nos sirve para el filtrado de busqueda escrita-->
                        <p class="titulo">Metodologia de los siete pasos para mejora de procesos en una empresa avícola</p>
                        <p class="fecha">2021</p>                   <!--clase que ayuda para el filtrado-->
                        <p class="materia">Metodologias</p>        <!--clase que ayuda para el filtrado-->
                        <p class="carrera">Ingenieria de Sistemas</p>       <!--clase que ayuda para el filtrado-->
                        <p class="autor">Mauricio Laiza Emiterio</p>       <!--clase que ayuda para el filtrado-->
                        <p class="categoria">tesis</p>
                    </div>
                </div>
                <div class="Contenido__DL__libros__1">   <!--Contenedor general, para el filtrado usando JS-->
                    <img src="../../Recursos/imgLibros/T2T.JPG"> <!-- imagen representativa del libro-->
                    <div>
                        <h4>Titulo: <span>Control de las infracciones y formalizacion de los vehiculos menores      <!--Titulo del material con H4-->
                                motorizados en ATE 2017-2018</span></h4>                                                                <!--Nombre del material con el span-->
                        <p>Para el desarrollo del presente estudio se aplicó el método de tipo transversal y analítica, ya
                            que se analizó las infracciones impuestas de tipo A, de tipo B y de tipo C, siendo 0, 13286 y
                            3296 respectivamente. Los resultados más importantes del presente estudio: La municipalidad
                            distrital de Ate, no aplica las infracciones de tipo A que son dirigidos a las empresas formales;
                            De las 47 infracciones de tipo B con mayor cantidad registrada en el sistema de fiscalización
                            de transporte es de tipo B-9 con un total de 4496 infracciones: La infracción por
                            contaminación sonora con su código B-18 se registró 472 infracciones en el año 2017
                            <a href="../RecursosDL_Libros/" style="color: blue;">...ver      <!--envio a pagina de la informacion al libro-->
                                más</a>.
                        </p>
                        <div>
                            <p>Fecha: <span>2021</span></p>
                            <p>Materia: <span>Control y Formalizacion</span></span></p>
                            <p>Carrera: <span>Ingenieria de Transportes</span></p>
                            <p>Autor: <span>Yovana Cabezas Canales</span></p>
                            <p>Categoria: <span>Tesis</span></p>
                        </div>
                    </div>
                    <div class="detalles" style="display: none;">                   <!--Div que nos sirve para el filtrado de busqueda escrita-->
                        <p class="titulo">Control de las infracciones y formalizacion de los vehiculos menores      <!--Titulo del material con H4-->
                            motorizados en ATE 2017-2018</p>
                        <p class="fecha">2021</p>                   <!--clase que ayuda para el filtrado-->
                        <p class="materia">Control y Formalizacion</p>        <!--clase que ayuda para el filtrado-->
                        <p class="carrera">Ingenieria de Transportes</p>       <!--clase que ayuda para el filtrado-->
                        <p class="autor">Yovana Cabezas Canales</p>       <!--clase que ayuda para el filtrado-->
                        <p class="categoria">tesis</p>
                    </div>
                </div>
                <div class="Contenido__DL__libros__1">   <!--Contenedor general, para el filtrado usando JS-->
                    <img src="../../Recursos/imgLibros/T3I.JPG"> <!-- imagen representativa del libro-->
                    <div>
                        <h4>Titulo: <span>Elaboracion de un plan de mantenimiento preventivo en los puentes nde abordaje para      <!--Titulo del material con H4-->
                                         pasajeros en la compañia American Airlines Boston, 2019</span></h4>                                                                <!--Nombre del material con el span-->
                        <p>El presente trabajo de investigación, realizado bajo la modalidad de informe por experiencia
                            profesional, titulado “Elaboración de un plan de mantenimiento preventivo en los puentes de
                            abordaje de pasajeros en la compañía American Airlines, Boston, 2019”, tiene como objetivo
                            principal elaborar un plan de mantenimiento preventivo para garantizar el buen funcionamiento
                            de los puentes de abordaje de la Estación de Boston en el Aeropuerto Internacional de Logan.
                            <a href="../RecursosDL_Libros/" style="color: blue;">...ver      <!--envio a pagina de la informacion al libro-->
                                más</a>.
                        </p>
                        <div>
                            <p>Fecha: <span>2019</span></p>
                            <p>Materia: <span>Abordaje</span></span></p>
                            <p>Carrera: <span>Ingenieria Industrial</span></p>
                            <p>Autor: <span>Del Aguila Torres Wilbert Alfonso</span></p>
                            <p>Categoria: <span>Tesis</span></p>
                        </div>
                    </div>
                    <div class="detalles" style="display: none;">                   <!--Div que nos sirve para el filtrado de busqueda escrita-->
                        <p class="titulo">Elaboracion de un plan de mantenimiento preventivo en los puentes nde abordaje para      <!--Titulo del material con H4-->
                            pasajeros en la compañia American Airlines Boston, 2019</p>
                        <p class="fecha">2019</p>                   <!--clase que ayuda para el filtrado-->
                        <p class="materia">Abordaje</p>        <!--clase que ayuda para el filtrado-->
                        <p class="carrera">Ingenieria Industrial</p>       <!--clase que ayuda para el filtrado-->
                        <p class="autor">Del Aguila Torres Wilbert Alfonso</p>       <!--clase que ayuda para el filtrado-->
                        <p class="categoria">tesis</p>
                    </div>
                </div>
                <div class="Contenido__DL__libros__1">   <!--Contenedor general, para el filtrado usando JS-->
                    <img src="../../Recursos/imgLibros/T4A.JPG"> <!-- imagen representativa del libro-->
                    <div>
                        <h4>Titulo: <span>Implementacion del plan HACCP para poder exportar ingedientes      <!--Titulo del material con H4-->
                                            elaborados por la empresa alitecno al mercado boliviano</span></h4>             <!--Nombre del material con el span-->
                        <p>El presente trabajo es una descripción detallada sobre la implementación del Sistema HACCP en
                            la fabricación de alimentos, a fin de asegurar la calidad sanitaria y la inocuidad de los productos
                            elaborados por la empresa “ALITECNO” destinados a exportación, obteniendo de esta manera la
                            Certificación de Validación Técnica Oficial del Plan de Análisis de Peligros y Puntos Críticos
                            de Control (HACCP) otorgada por la Dirección General de Salud Ambiental (Digesa) del Ministerio
                            de Salud<a href="../RecursosDL_Libros/Doc8.php" style="color: blue;">...ver      <!--envio a pagina de la informacion al libro-->
                                más</a>.
                        </p>
                        <div>
                            <p>Fecha: <span>2012</span></p>
                            <p>Materia: <span>Implementacion de un sistema</span></span></p>
                            <p>Carrera: <span>Ingenieria Agroindustrial</span></p>
                            <p>Autor: <span>Diaz Aliaga, Marianela Elva</span></p>
                            <p>Categoria: <span>Tesis</span></p>
                        </div>
                    </div>
                    <div class="detalles" style="display: none;">                   <!--Div que nos sirve para el filtrado de busqueda escrita-->
                        <p class="titulo">Implementacion del plan HACCP para poder exportar ingedientes      <!--Titulo del material con H4-->
                            elaborados por la empresa alitecno al mercado boliviano</p>
                        <p class="fecha">2012</p>                   <!--clase que ayuda para el filtrado-->
                        <p class="materia">Implementacion de un sistema</p>        <!--clase que ayuda para el filtrado-->
                        <p class="carrera">Ingenieria Agroindustrial</p>       <!--clase que ayuda para el filtrado-->
                        <p class="autor">Diaz Aliaga, Marianela Elva</p>       <!--clase que ayuda para el filtrado-->
                        <p class="categoria">tesis</p>
                    </div>
                </div>
                <div class="Contenido__DL__libros__1">   <!--Contenedor general, para el filtrado usando JS-->
                    <img src="../../Recursos/imgLibros/Ponencia.JPG"> <!-- imagen representativa del libro-->
                    <div>
                        <h4>Titulo: <span>La transnacional museística o de como hemos dejado de hacer cosas con las cosas      <!--Titulo del material con H4-->
                                           </span></h4>             <!--Nombre del material con el span-->
                        <p>Dos nociones de Giorgio Agamben son el punto de partida de este trabajo. Por un lado, la
                            idea-denuncia acerca de la “destrucción de la experiencia”, esto es, la imposibilidad, para el
                            hombre occidental, de tener y hacer experiencia. Esto está vinculado, a su vez, con la
                            constatación de que el mundo está siendo convertido en un museo recorrido por
                            espectadores-turistas<a href="../RecursosDL_Libros/Doc9.php" style="color: blue;">...ver      <!--envio a pagina de la informacion al libro-->
                                más</a>.
                        </p>
                        <div>
                            <p>Fecha: <span>2006</span></p>
                            <p>Materia: <span>Implementacion de un sistema</span></span></p>
                            <p>Carrera: <span>Ingenieria Industrial</span></p>
                            <p>Autor: <span>Flavia Costa</span></p>
                            <p>Categoria: <span>ponencia</span></p>
                        </div>
                    </div>
                    <div class="detalles" style="display: none;">                   <!--Div que nos sirve para el filtrado de busqueda escrita-->
                        <p class="titulo">La transnacional museística o de como hemos dejado de hacer cosas con las cosas</p>
                        <p class="fecha">2006</p>                   <!--clase que ayuda para el filtrado-->
                        <p class="materia">Implementacion de un sistema</p>        <!--clase que ayuda para el filtrado-->
                        <p class="carrera">Ingenieria Industrial</p>       <!--clase que ayuda para el filtrado-->
                        <p class="autor">Flavia Costa</p>       <!--clase que ayuda para el filtrado-->
                        <p class="categoria">Ponencia</p>
                    </div>
                </div>
                <div class="Contenido__DL__libros__1">   <!--Contenedor general, para el filtrado usando JS-->
                    <img src="../../Recursos/imgLibros/Revista.JPG"> <!-- imagen representativa del libro-->
                    <div>
                        <h4>Titulo: <span>Buenas Practicas en el rol de la auditoria en las publicaciones cientificas      <!--Titulo del material con H4-->
                                           </span></h4>             <!--Nombre del material con el span-->
                        <p>Revista cientifica  donde se puede visualizar  diferentes articulos originales como es el caso 
                            de la simulacion de procesos, pensamiento sistemico, metodos de calculo de hipotesis, diferentes
                            modelos cientificos, etc. Esto con la finalidad de dar de conocer al lector sobre las ultimas 
                            innovaciones de la busqueda de estudio en la Ingenieria de Sistemas<a href="../RecursosDL_Libros/Doc10.php" style="color: blue;">...ver      <!--envio a pagina de la informacion al libro-->
                                más</a>.
                        </p>
                        <div>
                            <p>Fecha: <span>2022</span></p>
                            <p>Materia: <span>Auditoria</span></span></p>
                            <p>Carrera: <span>Ingenieria de Sistemas</span></p>
                            <p>Autor: <span>Universidad Nacional de San Martin</span></p>
                            <p>Categoria: <span>Revista</span></p>
                        </div>
                    </div>
                    <div class="detalles" style="display: none;">                   <!--Div que nos sirve para el filtrado de busqueda escrita-->
                        <p class="titulo">Buenas Practicas en el rol de la auditoria en las publicaciones cientificas</p>
                        <p class="fecha">2022</p>                   <!--clase que ayuda para el filtrado-->
                        <p class="materia">Auditoria</p>        <!--clase que ayuda para el filtrado-->
                        <p class="carrera">Ingenieria de Sistemas</p>       <!--clase que ayuda para el filtrado-->
                        <p class="autor">Universidad Nacional de San Martin</p>       <!--clase que ayuda para el filtrado-->
                        <p class="categoria">revista</p>
                    </div>
                </div>
            </div>
            <div class="Contenido__DL__Filtrado">
                <div class="Contenido__DL__Filtrado__1">
                    <h3>CATEGORIAS</h3>
                    <div>
                        <ul>
                            <li><a href="">Libros</a></li>
                            <li><a href="">Tesis</a></li>
                            <li><a href="">Ponencias</a></li>
                            <li><a href="">Revistas</a></li>
                            <li><a href="">Articulos</a></li>
                        </ul>
                    </div>
                </div>
                <div class="Contenido__DL__Filtrado__1">
                    <h3>DE ACUERDO A</h3>
                    <div>
                        <ul>
                            <li><a href="../RecursosDL_Contenido/RecursosDL_Fecha.php">Fecha</a></li>
                            <li><a href="../RecursosDL_Contenido/RecursosDL_Autor.php">Autor</a></li>
                            <li><a href="../RecursosDL_Contenido/RecursosDL_Materia.php">Materia</a></li>
                            <li><a href="../RecursosDL_Contenido/RecursosDL_Titulo.php">Titulo</a></li>
                            <li><a href="../RecursosDL_Contenido/RecursosDL_Carrera.php">Carrera</a></li>
                        </ul>
                    </div>
                </div>
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
    <script src="../script.js"></script>
    <script src="../../Inicio/Image.js"></script>
</body>