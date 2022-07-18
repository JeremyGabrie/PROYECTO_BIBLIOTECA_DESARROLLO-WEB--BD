<?php
    session_start();
    $conexion=mysqli_connect("localhost","root","","biblioteca");
    $id=$_GET['id'];
    $eliminar="DELETE FROM documentosalmacenados WHERE idDocAlma='$id' ";
    $ejecucion=mysqli_query($conexion,$eliminar);
    if($ejecucion){
        echo "<script>alert('Se ha eliminado correctamente');
              window.location='confirmar.php';</script>";
        mysql_free_result($Resultado);
        mysqli_close($conexion);
    }else{
        echo "<script>alert('No se pudo eliminar');</script>";
        mysql_free_result($Resultado);
        mysqli_close($conexion);
    }
?>