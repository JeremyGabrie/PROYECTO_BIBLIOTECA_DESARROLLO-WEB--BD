<?php
if(!empty($_POST['nombreAlum']) && !empty($_POST['apellidoAlum']) && !empty($_POST['dniAlum'])
&& !empty($_POST['codigoAlum']) && !empty($_POST['correoAlum']) && !empty($_POST['contraAlum'])){
    //CONEXION A LA BD
    $conexion=mysqli_connect("localhost","root","","biblioteca");
    //DATOS INGRESADO DEL FORMULARIO
    $nombre=$_POST['nombreAlum'];
    $apellido=$_POST['apellidoAlum'];
    $dni=$_POST['dniAlum'];
    $codigo=$_POST['codigoAlum'];
    $correo=$_POST['correoAlum'];
    $contra=$_POST['contraAlum'];
    //SELECCIONADO DE LA TABLA ALUMNOS
    $cuenta="SELECT * FROM alumnos";
    $leer= mysqli_query($conexion,$cuenta);
    $band=0;
    while($row=mysqli_fetch_array($leer,MYSQLI_ASSOC)){
        if($row["correo_alum"]==$correo || $row['codigo_alum']==$codigo || ($row['nombre_alum']==$nombre && $row['apellido_alum']==$apellido)
           || $row["num_documento_alum"]==$dni){
            $band=1;
        }
    }
    if($band==0){
        //INSERTADO DE USUARIO
        $insertar="INSERT INTO alumnos(nombre_alum,apellido_alum,num_documento_alum,codigo_alum,correo_alum,contra_alum)
        VALUES('$nombre','$apellido','$dni','$codigo','$correo','$contra')";
        mysqli_query($conexion,$insertar);
        //INSERTADO DE CUENTA
        $insertarcuenta="INSERT INTO cuentas(usuario,contraseña,nombre,apellido,codigo,condicion)
        VALUES('$correo','$contra','$nombre','$apellido','$codigo','Alumno')";
        mysqli_query($conexion,$insertarcuenta);
        header("Location: ../../index.php");
        mysqli_close($conexion);
    }else{
        mysqli_close($conexion);
        echo "<script>alert('No se puede registrar, por repetición de datos');
            window.location='../../index.php';</script>";
    }
}else{
    $error="vacio";
    header("Location: ../registro.php?error=$error");
}