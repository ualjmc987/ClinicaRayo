<<?php
$host = "localhost";
$username = "root";
$password = "12345678";
$dbname = "clinicarayo";

try {
    // Conectar a la base de datos con PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Establecer el modo de error de PDO a excepción
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conectado a la base de datos correctamente.";
} catch (PDOException $e) {
    // Si ocurre un error, se lanza una excepción con el mensaje del error
    echo "Error de conexión: " . $e->getMessage();
}
?>
