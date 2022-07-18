<?php
    session_start();
    $conexion=mysqli_connect("localhost","root","","biblioteca");
    if(isset($_POST['Presencial']) && $_SESSION['Almacen']!=0)
    {
        /*INGRESO DE LA RESERVA*/
        $min=1000;
        $max=9999;
        $CodigoResPre="PRE".generadorCod($min,$max,$conexion);
        $resdom= "INSERT into reservapresencial(CodigoResPre,DireccionPre,FechaPre,CodigoUserPre) VALUES
                        ('$CodigoResPre','$_POST[direccion]','$_POST[fecha]','$_SESSION[Codigo]')";
        mysqli_query($conexion,$resdom);

        /*INGRESO A LA RESERVA GENERAL*/
        $cod=$_SESSION['Codigo'];
        $consulta="SELECT * FROM documentosalmacenados where CodigoUsuario='$cod'";
        $resultado= mysqli_query($conexion, $consulta);
        while($row=mysqli_fetch_array($resultado,MYSQLI_ASSOC))
        {
            $resusu= "INSERT into reservausuario(CodigoRes,NombreDoc,AutorDoc,ISBNDoc,DireccionRes,TipoRes,FechaRes,EstadoRes,CodigoUsuarioRes) VALUES
                            ('$CodigoResPre','$row[NombreDocAlma]','$row[AutorDocAlma]','$row[ISBNDocAlma]','$_POST[direccion]','Domicilio','$_POST[fecha]','Pendiente','$_SESSION[Codigo]')";
            mysqli_query($conexion,$resusu);
        }
        /*ELIMINACION DE DOCUMENTOS ALMACENADOS*/
        $eliminar="DELETE FROM documentosalmacenados WHERE CodigoUsuario=$_SESSION[Codigo] ";
        $ejecucion=mysqli_query($conexion,$eliminar);
        echo "<script>alert('Reserva Realizada con exito');
              window.location='../confirmar.php';</script>";
        mysqli_close($conexion);
    }else if(isset($_POST['Presencial']) && $_SESSION['Almacen']==0){
        echo "<script>alert('Elija documentos para poder reservar');
              window.location='../confirmar.php';</script>";
        mysqli_close($conexion);
    }
    function generadorCod($Min,$Max,$con)
    {
        do {
            $rand=mt_rand($Min,$Max);
            $band=0;
            $consulta="SELECT * FROM reservapresencial";
            $resultado= mysqli_query($con, $consulta);
            while($row=mysqli_fetch_array($resultado,MYSQLI_ASSOC)){
                if($rand==$row['CodigoResPre']){
                    $band==1;
                }
            }
        } while ($band==1);
        return $rand;
    }