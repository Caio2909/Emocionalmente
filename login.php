<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "caio";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $name = $_POST["name"];
    $password = $_POST["password"];
    
    $sql = "SELECT * FROM user WHERE login = '$name' and senha = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0){
        echo '<script>alert("Autenticado com sucesso!")</script>';
        header("Location: logado.php");
    }
    else{
        echo '<script>alert("Erro de autenticação!")</script>';
        header("Location: autenticar.php");
        return 1;
    }
}
?> 
</body>
</html>
