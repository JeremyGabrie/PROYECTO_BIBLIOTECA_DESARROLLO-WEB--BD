<?php
$error;
if(!empty($_POST['usuario']) && !empty($_POST['contra']) && !empty($_POST['nuevacontra'])){
    $usuario=$_POST['usuario'];
    $contra=$_POST['contra'];
    $nuevacontra=$_POST['nuevacontra'];

    //conexion a la BD
    $conexion=mysqli_connect("localhost","root","","biblioteca");

    //verificar usuario
    $Lectura="SELECT * FROM cuentas";
    $leer= mysqli_query($conexion,$Lectura);
    $band=1;
    while($row=mysqli_fetch_array($leer,MYSQLI_ASSOC)){
        if($row["usuario"]==$usuario && $row["contraseña"]==$contra){
            $band=0;
        }
    }
    if($band==1){
        $error="incorrecto";
        header("Location: cambio.php?error=$error");
    }
    if($band==0){
        //actualiuzacion de datos
        $actualizar="UPDATE cuentas SET contraseña='$nuevacontra' WHERE usuario='$usuario' and contraseña='$contra'";

        //EJECUTAR INSERCION
        $resultado=mysqli_query($conexion,$actualizar);
        mysqli_close($conexion);
        echo "<script>alert('Cambio realizado');
        window.location='cambio.php';</script>";
        header("Location:../index.php");
    }
}else{
    $error="vacio";
    header("Location: cambio.php?error=$error");
}