<?php
include('plantilla/head.php');
include('administrador/conn.php');

$sql = "select * from productos;";
$result = mysqli_query($conn,$sql);

?>
    <div class="container-lg">
        <div class="row">
        <?php
        if (mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){
        ?>
            <div class="card" style="width: 18rem;">
                <img src="<?php echo $row['foto']?>" class="card-img-top img-fluid" alt="Foto del producto">
                <div class="card-body">
                    <center>
                    <h4 class="card-title"><?php echo $row['nombre']?></h4>
                    </center>
                    <p class="card-text"><?php echo $row['descripcion']?></p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item" style="background-color:beige;">Precio: <?php echo $row['precio']?></li>
                    <li class="list-group-item">Marca: <?php echo $row['marca']?></li>
                </ul>
                <div class="card-body">
                <center>
                    <button type="button" class="btn btn-success">Comprar</button>
                    </center>
                </div>
            </div>
            <?php
              }
            }else{?>
                <div class="alert alert-danger" role="alert">
                       Error al cargar los datos.
                </div><?php
            }
            ?>
        </div>
    </div>
<center>
<?php
include('plantilla/footer.php')
?>
  </center>  
</body>
</html>