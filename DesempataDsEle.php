<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Desempate.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sofia+Sans+Condensed:ital,wght@0,1..1000;1,1..1000&display=swap" rel="stylesheet">
    <title>Perguntas Desempata DsEle</title>
</head>
<body>
    <header>
        <img src="img/Group 6.png" alt="">
    </header>
    <div class="conteudo">
        <div class="formulario">
            <form action="ValidaDesempateExatas.php" method="post">
                <div class="texto">
                    <label for="PerguntaDesempate1" class = "Pergunta">Quando pensa em seu futuro profissional, você se vê mais:</label><br><br>
                    <input type="radio" name="PerguntaDesempate1" value ='ds' id = "Pergunta1.1"><label for="Pergunta1.1" class = "Respostas">a) Desenvolvendo software ou aplicativos inovadores.</label><br>
                    <input type="radio" name="PerguntaDesempate1" value ='ele' id = "Pergunta1.2"><label for="Pergunta1.2" class = "Respostas">b) Projetando e trabalhando com sistemas elétricos e eletrônicos.</label><br><br>
                    <label for="PerguntaDesempate2" class = "Pergunta">Ao enfrentar um problema complexo, você prefere lidar com:</label><br><br>
                    <input type="radio" name="PerguntaDesempate2" value ='ds' id = "Pergunta2.1"><label for="Pergunta2.1" class = "Respostas">a) Códigos, algoritmos e programação.</label><br>
                    <input type="radio" name="PerguntaDesempate2" value ='ele' id = "Pergunta2.2"><label for="Pergunta2.2" class = "Respostas">b) Circuitos elétricos, dispositivos eletrônicos e sistemas de potência.</label><br><br>
                    <label for="PerguntaDesempate3" class = "Pergunta">Quando se depara com um desafio técnico, você tende a se sentir mais confortável:</label><br><br>
                    <input type="radio" name="PerguntaDesempate3" value ='ds' id = "Pergunta3.1"><label for="Pergunta3.1" class = "Respostas">a) Encontrando soluções através da programação e da lógica.</label><br>
                    <input type="radio" name="PerguntaDesempate3" value ='ele' id = "Pergunta3.2"><label for="Pergunta3.2" class = "Respostas">b) Analisando circuitos e componentes elétricos para encontrar soluções.</label><br><br>
                </div>
                <div class="botao">
                    <input type="submit" value="Proxima" class = submit>
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>