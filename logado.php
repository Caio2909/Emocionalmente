<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Avatar Generator</title>
</head>
<body>
  <div id="avatarContainer">
    <img height="200px" id="avatar" />
  </div>

  <div id="colorButtons">
    <label for="skinColorSelect">Escolha sua cor de pele:</label><br>
    <button class="skinCorButton colorButton" value="ffdbac" style="background-color:#ffdbac;"></button>
    <button class="skinCorButton colorButton" value="d8b294" style="background-color:#d8b294;"></button>
    <button class="skinCorButton colorButton" value="f1c27d" style="background-color:#f1c27d;"></button>
    <button class="skinCorButton colorButton" value="8d5524" style="background-color:#8d5524;"></button>
    <button class="skinCorButton colorButton" value="614335" style="background-color:#614335;"></button>
  </div>

  <br><br>

  <div id="colorButtons">
    <label for="hairColorSelect">E qual a cor do seu cabelo?</label><br>
    <button class="hairCorButton colorButton" value="a2826D" style="background-color:#a2826D;"></button>
    <button class="hairCorButton colorButton" value="2D221C" style="background-color:#2D221C;"></button>
    <button class="hairCorButton colorButton" value="785C4E" style="background-color:#785C4E;"></button>
    <button class="hairCorButton colorButton" value="542217" style="background-color:#542217;"></button>
    <button class="hairCorButton colorButton" value="D19F7E" style="background-color:#D19F7E;"></button>
  </div>

  <script src="criarAvatar.js"></script>
</body>
</html>
