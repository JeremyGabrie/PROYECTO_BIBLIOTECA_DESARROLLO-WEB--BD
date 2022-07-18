<?php
if(!empty($_POST['nombreDoc']) && !empty($_POST['apellidoDoc']) && !empty($_POST['dniDoc'])
&& !empty($_POST['codigoDoc']) && !empty($_POST['correoDoc']) && !empty($_POST['gradoacaDoc'])
&& !empty($_POST['telefonoDoc']) && !empty($_POST['contraDoc'])){
    //CONEXION A LA BD
    $conexion=mysqli_connect("localhost","root","","biblioteca");
    //DATOS INGRESADO DEL FORMULARIO
    $nombre=$_POST['nombreDoc'];
    $apellido=$_POST['apellidoDoc'];
    $dni=$_POST['dniDoc'];
    $codigo=$_POST['codigoDoc'];
    $correo=$_POST['correoDoc'];
    $grado=$_POST['gradoacaDoc'];
    $telefono=$_POST['telefonoDoc'];
    $contra=$_POST['contraDoc'];
    //SELECCIONADO DE LA TABLA DOCENTE
    $cuenta="SELECT * FROM docentes";
    $leer= mysqli_query($conexion,$cuenta);
    $band=0;
    while($row=mysqli_fetch_array($leer,MYSQLI_ASSOC)){
        if($row["correo_doc"]==$correo || $row['codigo_doc']==$codigo || ($row['nombre_doc']==$nombre && $row['apellido_doc']==$apellido)
           || $row["num_documento_doc"]==$dni){
            $band=1;
        }
    }
    if($band==0){
        //INSERTADO DE USUARIO
        $insertar="INSERT INTO docentes(nombre_doc,apellido_doc,num_documento_doc,codigo_doc,correo_doc,gradoaca_doc,telefono_doc,contra_doc)
        VALUES('$nombre','$apellido','$dni','$codigo','$correo','$grado','$telefono','$contra')";
        mysqli_query($conexion,$insertar);
        //INSERTADO DE CUENTA
        $insertarcuenta="INSERT INTO cuentas(usuario,contraseña,nombre,apellido,codigo,condicion)
        VALUES('$correo','$contra','$nombre','$apellido','$codigo','Docente')";
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
    header("Location: ../registroDoc.php?error=$error");
}