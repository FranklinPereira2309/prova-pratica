<?php
$servername = "localhost";
$username = "franklin";
$password = "88321656";
$dbname = "gerenciartarefas";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
echo "<script>console.log('Conexão bem-sucedida');</script>"
?>
