<?php
session_start();
include 'conexion_be.php';


$Correo = $_POST['Correo'];
$contrasena = $_POST['contrasena'];
$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE
email = '$Correo' and clave= '$contrasena'");

if(mysqli_num_rows($validar_login) > 0){
    $_SESSION['$Usuario']=$Correo;
    header("Location:../../index.php ");
    exit();
} else {
    echo '
    <script>
    alert("Usuario no existe, por favor verifique los datos introducidos");
    window.location = "../index.php";
    </script>
    ';
    exit(); 
}
?>
