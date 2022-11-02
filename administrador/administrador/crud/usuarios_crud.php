<?php
include("../conn.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){

    
$verificar=true;


if($verificar){

        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $direccion=$_POST["direccion"];


        $sql="insert into clientes values(null,'$nombre','$apellido','$direccion')";
        if(mysqli_query($conn,$sql)){
            echo "Datos guardados correctamente!";

        }else{
            echo "NO SE PUDO GUARDAR";
        }

    }
}
