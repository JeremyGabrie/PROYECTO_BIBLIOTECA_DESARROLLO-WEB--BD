<?php
if(!empty($_POST['nombreAdmi']) && !empty($_POST['apellidoAdmi']) && !empty($_POST['dniAdmi'])
&& !empty($_POST['codigoAdmi']) && !empty($_POST['correoAdmi']) && !empty($_POST['telefonoAdmi'])
&& !empty($_POST['contraAdmi'])){
    //CONEXION A LA BD
    $conexion=mysqli_connect("localhost","root","","biblioteca");
    //DATOS INGRESADO DEL FORMULARIO
    $nombre=$_POST['nombreAdmi'];
    $apellido=$_POST['apellidoAdmi'];
    $dni=$_POST['dniAdmi'];
    $codigo=$_POST['codigoAdmi'];
    $correo=$_POST['correoAdmi'];
    $telefono=$_POST['telefonoAdmi'];
    $contra=$_POST['contraAdmi'];
    //SELECCIONADO DE LA TABLA ADMINISTRATIVO
    $cuenta="SELECT * FROM administrativo";
    $leer= mysqli_query($conexion,$cuenta);
    $band=0;
    while($row=mysqli_fetch_array($leer,MYSQLI_ASSOC)){
        if($row["correo_admin"]==$correo || $row['codigo_admin']==$codigo || ($row['nombre_admin']==$nombre && $row['apellido_admin']==$apellido)
           || $row["num_documento_admin"]==$dni){
            $band=1;
        }
    }
    if($band==0){
        //INSERTADO DE USUARIO
        $insertar="INSERT INTO administrativo(nombre_admin,apellido_admin,num_documento_admin,codigo_admin,correo_admin,telefono_admin,contra_admin)
        VALUES('$nombre','$apellido','$dni','$codigo','$correo','$telefono','$contra')";
        mysqli_query($conexion,$insertar);
        //INSERTADO DE CUENTA
        $insertarcuenta="INSERT INTO cuentas(usuario,contraseña,nombre,apellido,codigo,condicion)
        VALUES('$correo','$contra','$nombre','$apellido','$codigo','Administrativo')";
        mysqli_query($conexion,$insertarcuenta);
        mysqli_close($conexion);
        header("Location: ../../index.php");
    }else{
        mysqli_close($conexion);
        echo "<script>alert('No se puede registrar, por repetición de datos');
            window.location='../../index.php';</script>";
    }
    //EJECUTAR INSERCION
}else{
    $error="vacio";
    header("Location: ../registroAdmi.php?error=$error");
}