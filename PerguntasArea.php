<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="PerguntaAreas.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sofia+Sans+Condensed:ital,wght@0,1..1000;1,1..1000&display=swap" rel="stylesheet">
    <title>Perguntas Area</title>
</head>
<body>
    <header>
        <img src="img/Group 6.png" alt="">
    </header>
    <div class="conteudo">
        <div class="formulario">
            <form action="ValidaArea.php" method="post">
                <div class="texto">
                    <label for="PerguntaArea1" class = "Pergunta">Quando confrontado com um problema complexo, você prefere:</label><br><br>
                    <input type="radio" name="PerguntaArea1" value ='1' id = "Pergunta1.1"><label for="Pergunta1.1" class = "Respostas">a) Analisar os detalhes e buscar uma solução lógica.</label><br>
                    <input type="radio" name="PerguntaArea1" value ='2' id = "Pergunta1.1"><label for="Pergunta1.2" class = "Respostas">b) Explorar as diferentes perspectivas e possíveis significados.</label><br><br>
                    <label for="PerguntaArea2" class = "Pergunta">Ao aprender algo novo, você tende a:</label><br><br>
                    <input type="radio" name="PerguntaArea2" value ='1' id = "Pergunta1.1"><label for="Pergunta2.1" class = "Respostas">a) Valorizar a precisão e a aplicação prática das informações.</label><br>
                    <input type="radio" name="PerguntaArea2" value ='2' id = "Pergunta1.1"><label for="Pergunta2.2" class = "Respostas">b) Ficar mais interessado nas teorias e nas ideias subjacentes.</label><br><br>
                    <label for="PerguntaArea3" class = "Pergunta">Em uma discussão sobre um tema controverso, você costuma:</label><br><br>
                    <input type="radio" name="PerguntaArea3" value ='1' id = "Pergunta1.1"><label for="Pergunta3.1" class = "Respostas">a) Argumentar com base em fatos e evidências concretas.</label><br>
                    <input type="radio" name="PerguntaArea3" value ='2' id = "Pergunta1.1"><label for="Pergunta3.2" class = "Respostas">b) Considerar as emoções e experiências pessoais das pessoas envolvidas.</label><br><br>
                </div>
                <div class="botao">
                    <input type="submit" value="Proxima" class = submit>
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>