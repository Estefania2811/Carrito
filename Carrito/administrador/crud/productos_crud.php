<?php
include("../conn.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){

$ruta="../../img/productos/";
$ruta.=basename($_FILES["foto"]["name"]);
$verificar= false;

if(move_uploaded_file($_FILES["foto"]["tmp_name"],$ruta)){
    //echo "Archivo guardado con exito";
    $verificar=true;
}
//else{
   // echo"ERROR";
//}
if($verificar){
    $nombre=$_POST["nombre"];
    $precio=$_POST["precio"];
    $cantidad=$_POST["cantidad"];
    $foto="img/productos".basename($_FILES['foto']['name']);

    $sql="insert into productos values(null,'$nombre',$cantidad,$precio,'$foto')";
    if(mysqli_query($conn,$sql)){
        echo "Datos guardados correctamente!";

    }else{
        echo "NO SE PUDO MARTA";
    }

}
}
