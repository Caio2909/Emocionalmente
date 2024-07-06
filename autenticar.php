<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Login e Registro</title>
</head>
<body>
    <form method="post" id="myForm">

        <!-- Campos de entrada -->
        Name: <input type="text" name="name"><br>
        Password: <input type="password" name="password"><br>

        <!-- Botões de ação -->
        <input type="button" value="Logar" onclick="submitForm('login.php')">
        <input type="button" value="Registrar" onclick="submitForm('register.php')">

    </form>

    <script>
        function submitForm(action) {
            var form = document.getElementById('myForm');
            form.action = action;
            form.submit();
        }
    </script>
</body>
</html>
