<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "aulabdphp";
$port = 3306;

// Aqui a variável $conn recebe a conexão:
$conn = mysqli_connect(hostname: $host, username: $user, password: $pass, database: $db, port: $port);

// Verificação (opcional)
if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}
?>
