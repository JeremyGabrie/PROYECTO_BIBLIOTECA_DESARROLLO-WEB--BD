<?php
$error;
    if(!empty($_POST['usuarioIng']) && !empty($_POST['contraIng'])){
        session_start();
        $usuario= $_POST['usuarioIng'];
        $contra= $_POST['contraIng'];
        //CONEXION A LA BD
        $conexion=mysqli_connect("localhost","root","","biblioteca");
        $consulta="SELECT * FROM cuentas WHERE usuario='$usuario' and contraseña='$contra'";
        $resultado= mysqli_query($conexion, $consulta);
        $filas=mysqli_num_rows($resultado);
        while($row=mysqli_fetch_array($resultado,MYSQLI_ASSOC)){
            $nombre=$row['nombre'];
            $apellido=$row['apellido'];
            $codigo=$row['codigo'];
            $condicion=$row['condicion'];
        }
        if($filas>0){
            $_SESSION['Usuario']=$usuario;
            $_SESSION['Curso']=$contra;
            $_SESSION['Nombre']=$nombre;
            $_SESSION['Apellido']=$apellido;
            $_SESSION['Codigo']=$codigo;
            $_SESSION['Condicion']=$condicion;
            mysqli_free_result($resultado);
            mysqli_close($conexion);
            echo "<script>alert('Bienvenido $_SESSION[Nombre] $_SESSION[Apellido]');
            window.location='inicio.php';</script>";
        }else{
            $error="incorrecto";
            mysqli_close($conexion);
            header("Location: ../Login/index.php?error=$error");
        }
    }else{
        $error="vacio";
        header("Location: ../Login/index.php?error=$error");
    }
?>