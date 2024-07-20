
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>template</title>
    <link rel="stylesheet" href="novaCrianca.css">
    <div class="header">
            <img src="imgs/image.png" >
            <h1>EMOCIONALMENTE</h1>
        </div>
</head>
<body> 
<div id="avatarContainer">
    <img height="200px" id="avatar" />
  </div>
  <div id="colorButtons"><!-- Pele -->
    <label for="skinColorSelect">Escolha sua cor de pele:</label><br>
    <button type="button" class="skinCorButton colorButton" value="ffdbac" style="background-color:#ffdbac;"></button>
    <button type="button" class="skinCorButton colorButton" value="d8b294" style="background-color:#d8b294;"></button>
    <button type="button" class="skinCorButton colorButton" value="f1c27d" style="background-color:#f1c27d;"></button>
    <button type="button" class="skinCorButton colorButton" value="8d5524" style="background-color:#8d5524;"></button>
    <button type="button" class="skinCorButton colorButton" value="614335" style="background-color:#614335;"></button>
  </div>

  <div id="colorButtons"><!-- Cabelo-->
    <label for="hairTypeSelect">Como é seu cabelo?</label><br>
    <select class="hairType" id="hairType">
        <option value="shortRound">Baixo</option>
        <option value="dreads01">Dreads</option>
        <option value="curvy">Curvo</option>
        <option value="curly">Cacheado</option>
        <option value="longButNotTooLong">Médio</option>
        <option value="straight02">Liso</option>
    </select>
  </div>

  <div id="colorButtons"><!-- Cor cabelo-->
    <label for="hairColorSelect">E qual a cor do seu cabelo?</label><br>
    <button type="button" class="hairCorButton colorButton" value="D19F7E" style="background-color:#D19F7E;"></button>
    <button type="button" class="hairCorButton colorButton" value="a2826D" style="background-color:#a2826D;"></button>
    <button type="button" class="hairCorButton colorButton" value="785C4E" style="background-color:#785C4E;"></button>
    <button type="button" class="hairCorButton colorButton" value="b38b67" style="background-color:#b38b67;"></button>
    <button type="button" class="hairCorButton colorButton" value="2D221C" style="background-color:#2D221C;"></button>
  </div>

  <div id="colorButtons"><!-- Oculos-->
    <label for="oculos">Voce usa óculos?</label><br>
    <input type="radio" id="oculos" value="prescription01" name="oculos" class="oculosInput">Sim
    <input type="radio" id="oculos" value="" name="oculos" class="oculosInput">Não

  </div>
  <div id="colorButtons"><!-- Sentimento-->
    <label for="sentimentos">Como você está se sentindo?</label><br>
    <input type="radio" value="0" name="sentimento" class="sentimentoInput">Triste🙁
    <input type="radio" value="1" name="sentimento" class="sentimentoInput">Feliz 😊
    <input type="radio" value="2" name="sentimento" class="sentimentoInput">Raiva 😡


  </div>
  <button class="button" type="button" id="submitBtn">Enviar</button>
  <script src="criarAvatar.js"></script>
</body>
</html>
