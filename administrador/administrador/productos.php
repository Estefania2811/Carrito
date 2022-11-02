<?php
include("plantillas/head.php");
include "conn.php";
$sql="select *from productos;";
$result= mysqli_query($conn, $sql);
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
        <div class="col">
            <table class="table table-stiped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Foto</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while($row=mysqli_fetch_assoc($result)){
                        ?>


                        <tr><td><?php echo $row['id']?></td>
                        <td><?php echo $row['nombre']?></td>
                        <td><?php echo $row['precio']?></td>
                        <td><?php echo $row['cantidad']?></td>
                        <td><?php echo $row['descripcion']?></td>
                        <td><?php echo $row['marca']?></td>
                        <td><?php echo $row['foto']?></td>

                        <td>
                            <form action="crud/productos_crud.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $row['id']?>"/>
                                <button type="submit" class="btn btn-danger" name="Enviar" value="Eliminar">Eliminar</button>
                            </form>
                        </td>
                        <td>
                            <form action="formularioProductos.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $row['id']?>"/>
                                <button type="submit" class="btn btn-danger" name="Enviar" value="Eliminar">Actualizar</button>
                            </form>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>


            </table>
        </div>
    </div>
    <?php
        include("plantillas/footer.php");
    ?>

</html>
</body>
