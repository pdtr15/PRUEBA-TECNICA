<?php
// Configuración de la base de datos
$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = "prueba1";

// Conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Endpoint para enviar el formulario de contacto
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];
    
    // Preparar la consulta SQL
    $sql = "INSERT INTO mensajes (nombre, email, mensaje) VALUES (?, ?, ?)";
    
    // Preparar la declaración
    $stmt = $conn->prepare($sql);
    
    // Vincular parámetros y ejecutar la consulta
    $stmt->bind_param("sss", $nombre, $email, $mensaje);
    $stmt->execute();
    
    // Verificar si se insertó correctamente
    if ($stmt->affected_rows > 0) {
        echo json_encode(array("message" => "Mensaje enviado correctamente"));
    } else {
        echo json_encode(array("message" => "Error al enviar el mensaje"));
    }
    
    // Cerrar la declaración
    $stmt->close();
} else {
    echo json_encode(array("message" => "Método no permitido"));
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
