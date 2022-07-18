<?php
if(!empty($_POST['nombreExt']) && !empty($_POST['apellidoExt']) && !empty($_POST['dniExt'])
&& !empty($_POST['correoExt']) && !empty($_POST['direccionExt']) && !empty($_POST['telefonoExt'])
&& !empty($_POST['nivelacaExt']) && !empty($_POST['institucionExt']) && !empty($_POST['contraExt'])){
    //CONEXION A LA BD
    $conexion=mysqli_connect("localhost","root","","biblioteca");
    //DATOS INGRESADO DEL FORMULARIO
    $nombre=$_POST['nombreExt'];
    $apellido=$_POST['apellidoExt'];
    $dni=$_POST['dniExt'];
    $correo=$_POST['correoExt'];
    $direccion=$_POST['direccionExt'];
    $telefono=$_POST['telefonoExt'];
    $nivelaca=$_POST['nivelacaExt'];
    $institucion=$_POST['institucionExt'];
    $contra=$_POST['contraExt'];

    //ORDEN SQL
    $cuenta="SELECT * FROM externos";
    $leer= mysqli_query($conexion,$cuenta);
    $band=0;
    while($row=mysqli_fetch_array($leer,MYSQLI_ASSOC)){
        if($row["correo_ext"]==$correo || ($row['nombre_ext']==$nombre && $row['apellido_ext']==$apellido)
           || $row["num_documento_ext"]==$dni){
            $band=1;
        }
    }
    if($band==0){
        //INSERTADO DE USUARIO
        $insertar="INSERT INTO externos(nombre_ext,apellido_ext,num_documento_ext,correo_ext,direccion_ext,telefono_ext,nivelaca_ext,
        institucion_ext,contra_ext) VALUES('$nombre','$apellido','$dni','$correo','$direccion','$telefono','$nivelaca','$institucion','$contra')";
        mysqli_query($conexion,$insertar);
        //INSERTADO DE CUENTA
        $insertarcuenta="INSERT INTO cuentas(usuario,contraseña,nombre,apellido,codigo,condicion)
        VALUES('$correo','$contra','$nombre','$apellido','$dni','Externo')";
        mysqli_query($conexion,$insertarcuenta);
        mysqli_close($conexion);
        header("Location: ../../index.php");
    }else{
        mysqli_close($conexion);
        echo "<script>alert('No se puede registrar, por repetición de datos');
            window.location='../../index.php';</script>";
    }
}else{
    $error="vacio";
    header("Location: ../registroExt.php?error=$error");
}