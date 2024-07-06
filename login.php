<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "caio";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST["name"];
    $password = $_POST["password"];

    // Prepared statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM medico WHERE nome = ? AND senha = ?");
    $stmt->bind_param("ss", $name, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $name;
        echo '<script>alert("Autenticado com sucesso!"); window.location.href = "selecaoDePaciente.php";</script>';
    } else {
        echo '<script>alert("Erro de autenticação!"); window.location.href = "login.php";</script>';
    }
}
?>

