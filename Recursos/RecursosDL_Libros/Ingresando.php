<?php
    session_start();
    $conexion=mysqli_connect("localhost","root","","biblioteca");
    error_reporting(0);
    if(isset($_POST['Añadir']))
    {
        $consulta="SELECT * FROM reservausuario WHERE CodigoUsuarioRes='$_SESSION[Codigo]'";
        $resultado= mysqli_query($conexion, $consulta);
        $filas=mysqli_num_rows($resultado);
        if(($filas+$_SESSION['Almacen'])!=4){
            $Titulo=$_POST['Titulo'];
            $cuenta="SELECT * FROM documentos WHERE NombreDoc='$Titulo'";
            $leer= mysqli_query($conexion,$cuenta);
            while($row=mysqli_fetch_array($leer,MYSQLI_ASSOC)){
                $band=0;
                $bool=comparacion($row["NombreDoc"],$_SESSION['Codigo'],$band,$conexion);
                if($bool==0){
                    $matriculaAlumno= "INSERT into documentosalmacenados(NombreDocAlma,MateriaDocAlma,FechaDocAlma,CarreraDocAlma,AutorDocAlma,ISBNDocAlma,CategoriaDocAlma,CodigoUsuario) VALUES
                            ('$row[NombreDoc]','$row[MateriaDoc]','$row[FechaDoc]','$row[CarreraDoc]','$row[AutorDoc]','$row[ISBNDoc]','$row[CategoriaDoc]','$_SESSION[Codigo]')";
                    mysqli_query($conexion,$matriculaAlumno);
                    echo "<script>alert('$row[CategoriaDoc] registrado(a)');
                            window.location='../../Servicios/Formularios/Reserva/confirmar.php';</script>";
                    mysqli_close($conexion);
                }else{
                    echo "<script>alert('Solo puede registrar una vez este documento');
                            window.location='../RecursosDL.php';</script>";
                    mysqli_close($conexion);
                }
            }
        }else{
            echo "<script>alert('Se alcanzó el limite para realizar reservas');
                            window.location='../RecursosDL.php';</script>";
            mysqli_close($conexion);
        }
    }
    if(isset($_POST['Ver'])){
        $direccion=$_POST['url'];
        echo "<script>window.location='$direccion';</script>";
        mysqli_close($conexion);
    }
    function comparacion($Doc,$Cod,$ba,$con){
        $cuenta="SELECT * FROM documentosalmacenados";
        $leer= mysqli_query($con,$cuenta);
        while($row=mysqli_fetch_array($leer,MYSQLI_ASSOC)){
            if($row['NombreDocAlma']==$Doc && $row['CodigoUsuario']==$Cod){
                $ba=1;
            }
        }
        return $ba;
    }
?>