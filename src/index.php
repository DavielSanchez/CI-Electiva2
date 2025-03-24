<?php
$servername = "mysql";  // Nombre del contenedor de MySQL
$username = "root";     // Usuario de la BD
$password = "root";     // Contraseña de la BD
$dbname = "testdb";     // Nombre de la base de datos

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

echo "Conexión exitosa a la base de datos MySQL!";

// Consultar la base de datos
$sql = "SELECT mensaje FROM saludo";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<br>" . $row['mensaje'];
    }
} else {
    echo "<br>No se encontraron resultados";
}

$conn->close();
?>