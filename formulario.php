<?php

if($_POST){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cursosql";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Conection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO empleado (nombre, apellido, email)
VALUES ('$nombre', '$apellido', '$email')";

if($conn->query($sql) === TRUE){
    echo "New record created successfully";
}else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

}

?>