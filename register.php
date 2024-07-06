<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "caio";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $name = $_POST["name"];
    $password = $_POST["password"];
}

$test = "SELECT * FROM medico WHERE nome = '$name'";
$result= $conn->query($test);

if ($result->num_rows > 0){
    die( "Nome de Usuário em uso.");

}
else{
    $stmt = $conn->prepare("INSERT INTO medico (nome, senha)
    VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $password);
    $stmt->execute();

    echo "Usuário registrado com sucesso";
    header("Location: autenticar.php");
}
?>

</body>
</html>