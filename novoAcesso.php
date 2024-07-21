<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Como você se sente hoje?</title>
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
  <div id="colorButtons"><!-- Sentimento-->
    <label for="sentimentos">Como você está se sentindo?</label><br>
    <input type="radio" value="0" name="sentimento" class="sentimentoInput">Triste🙁
    <input type="radio" value="1" name="sentimento" class="sentimentoInput">Feliz 😊
    <input type="radio" value="2" name="sentimento" class="sentimentoInput">Raiva 😡
  </div>
  <button type="button" id="submitBtn">Enviar</button>
  <script src="novoAcesso.js"></script>
</body>
</html>
