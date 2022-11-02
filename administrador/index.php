<?php
include("Plantillas/head.php");
session_start();

if(isset($_SESSION['PERMISO'])and $_SESSION['PERMISO']==true){
    echo"BIENVENIDO ";
}else{
    header('Location: login.php');
    
}
?>




<?php
include("Plantillas/footer.php");
?>