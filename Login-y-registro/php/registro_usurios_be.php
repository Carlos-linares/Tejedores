<?php

include 'conexion_be.php';

$Nombre_completo = $_POST['Nombre_completo'];
$Correo = $_POST['Correo'];
$Usuario = $_POST['Usuario'];
$rol = $_POST['rol'];
$contrasena = $_POST['contrasena'];

// encriptar contraseña
// $contrasena = hash('sha512', $contrasena);

// Preparar la consulta SQL
$query = "INSERT INTO usuarios (nombre, email, Usuario, rol, clave)
VALUES ('$Nombre_completo', '$Correo', '$Usuario', '$rol', '$contrasena')";


// verificar que el correo no se repita bases de datos
$verificar_Correo = mysqli_query($conexion, "SELECT * FROM  usuarios WHERE email='$Correo' ");
if(mysqli_num_rows($verificar_Correo) > 0) {
    echo'
    <script>
    alert("Este correo ya está registrado, intenta con otro diferente");
    window.location="../index.php";
    </script>
    ';
    exit();
}

// verificar que el usuario no se repita bases de datos
$verificar_Usuario = mysqli_query($conexion, " SELECT * FROM  usuarios WHERE usuario= '$Usuario' ");
if(mysqli_num_rows($verificar_Usuario) > 0) {
    echo'
    <script>
    alert("Este Usuario ya está registrado, intenta con otro diferente");
    window.location="../index.php";
    </script>
    ';
    exit();
}

$ejecutar = mysqli_query($conexion,$query);


if($ejecutar) {
    echo '
    <script>
    alert("Usuario almacenado exitosamente");
    window.location="../index.php";
    </script>
';
}else{
   echo '
    <script>
    alert("Usuario almacenado exitosamente");
    window.location="../index.php";
    </script>
    ';}

     mysqli_close($conexion);

?>
