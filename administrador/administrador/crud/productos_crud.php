<?php
include("../conn.php");
if($_SERVER["REQUEST_METHOD"]=="POST" and $_POST["Enviar"]==="Guardar"){

$ruta="../../img/productos/";
$ruta.=basename($_FILES["foto"]["name"]);
$verificar= false;

if(move_uploaded_file($_FILES["foto"]["tmp_name"],$ruta)){
    
    $verificar=true;
}

if($verificar){
    $nombre=$_POST["nombre"];
    $precio=$_POST["precio"];
    $cantidad=$_POST["cantidad"];
    $descripcion=$_POST["descripcion"];
    $marca=$_POST["marca"];
    $foto="img/productos/".basename($_FILES['foto']['name']);

    $sql="insert into productos values(null,'$nombre',$cantidad,$precio,'$descripcion','$marca','$foto')";
    if(mysqli_query($conn,$sql)){
        echo "Datos guardados correctamente!";
        

    }else{
        echo "NO SE PUDO GUARDAR";
    }

}

}elseif($_SERVER["REQUEST_METHOD"]=="POST" and $_POST["Enviar"]==="Eliminar"){
    $id=$_POST['id'];
    $sql="delete from productos where id = $id;";
    if(mysqli_query($conn,$sql)){
        echo "<script>alert('Datos eliminados correctamente');</script>";
    }else{
        echo "<script>alert('Error al eliminar.');</script>";
    }
    echo "<script>window.location.href='../productos.php'</script>";
}
