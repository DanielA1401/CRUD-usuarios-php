<?php
include("connection.php");
$con = connection();

// Captura de datos desde el formulario
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

// Preparar la consulta SQL para evitar inyecciones SQL
$sql = "INSERT INTO users (name, lastname, username, password, email) VALUES (?, ?, ?, ?, ?)";
$stmt = mysqli_prepare($con, $sql);

// Vincula los parámetros al statement preparado
mysqli_stmt_bind_param($stmt, "sssss", $name, $lastname, $username, $password, $email);

// Ejecuta la consulta preparada
$query = mysqli_stmt_execute($stmt);

if($query){
    Header("Location: index.php");
} else {
    // Aquí podrías manejar un error de forma más detallada
    echo "Error al insertar el registro";
}
?>
