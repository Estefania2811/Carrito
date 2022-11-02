<?php
include('../plantilla/head.php');
include "conn.php";
session_start();

if($_SESSION['PERMISO']==true){
  
    header('Location: formularioProductos.php');
}



if($_SERVER["REQUEST_METHOD"]=="POST" and $_POST["Enviar"]==="Actualizar"){
    $id=$_POST['id'];
    $sql="select * from productos where id = $id;";
    $result=$conn -> query($sql);
    $row=$result -> fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <title>Productos</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-4">
            </div>
            <div class="col-4">
                <br/>
                <div class="card">
                    <div class="card-header">
                        Productos
                    </div>
                    <div class="card-body">
                        <form action="crud/productos_crud.php" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <input type="hidden" id="id" value="<?php echo $row['id']?>">
                                <label for="nombre" class="form-label">Nombre:</label>
                                <input type="text" class="form-control" name="nombre">
                            </div>
                            <div class="mb-3">
                                <label for="cantidad" class="form-label">Cantidad:</label>
                                <input type="text" class="form-control" name="cantidad">
                            </div>
                            <div class="mb-3">
                                <label for="precio" class="form-label">Precio:</label>
                                <input type="text" class="form-control" name="precio">
                            </div>
                            <div class="mb-3">
                                <label for="descripcion" class="form-label">Descripcion:</label>
                                <input type="text" class="form-control" name="descripcion">
                            </div>
                            <div class="mb-3">
                                <label for="marca" class="form-label">Marca:</label>
                                <input type="text" class="form-control" name="marca">
                            </div>
                            <div class="mb-3">
                                <label for="foto" class="form-label">Foto:</label>
                                <label for="ruta" class="form-label"></label>
                                <input type="file" class="form-control" name="foto">
                            </div>
                           
                            <button type="submit" class="btn btn-primary" name="Enviar" value="Guardar">Nuevo</button>
                            
                            <form action="crud/productos_crud.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $row['id']?>"/>
                                <button type="submit" class="btn btn-primary" name="Enviar" value="Actualizar">Actualizar</button>
                            </form>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-4">

            </div>
        </div>
    </div>
  
</body>

</html>