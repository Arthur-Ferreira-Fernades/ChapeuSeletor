<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Desempate.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sofia+Sans+Condensed:ital,wght@0,1..1000;1,1..1000&display=swap" rel="stylesheet">
    <title>Perguntas Desempata DsLog</title>
</head>
<body>
    <header>
        <img src="img/Group 6.png" alt="">
    </header>
    <div class="conteudo">
        <div class="formulario">
            <form action="ValidaDesempateExatas.php" method="post">
                <div class="texto">
                    <label for="PerguntaDesempate1" class = "Pergunta">Ao pensar em sua futura carreira, você se vê mais:</label><br><br>
                    <input type="radio" name="PerguntaDesempate1" value ='ds' id = "Pergunta3.2"><label for="Pergunta3.2" class = "Respostas">a) Desenvolvendo e criando soluções de software.</label><br>
                    <input type="radio" name="PerguntaDesempate1" value ='log' id = "Pergunta3.2"><label for="Pergunta3.2" class = "Respostas">b) Gerenciando e otimizando processos de produção e distribuição.</label><br><br>
                    <label for="PerguntaDesempate2" class = "Pergunta">Quando enfrenta um problema complexo, você prefere lidar com:</label><br><br>
                    <input type="radio" name="PerguntaDesempate2" value ='ds' id = "Pergunta3.2"><label for="Pergunta3.2" class = "Respostas">a) Códigos, algoritmos e sistemas computacionais.</label><br>
                    <input type="radio" name="PerguntaDesempate2" value ='log' id = "Pergunta3.2"><label for="Pergunta3.2" class = "Respostas">b) Fluxos de trabalho, cadeias de suprimentos e logística de produção.</label><br><br>
                    <label for="PerguntaDesempate3" class = "Pergunta">Quando se trata de trabalhar em equipe, você se sente mais confortável:</label><br><br>
                    <input type="radio" name="PerguntaDesempate3" value ='ds' id = "Pergunta3.2"><label for="Pergunta3.2" class = "Respostas">a) Colaborando no desenvolvimento de novos sistemas e aplicativos.</label><br>
                    <input type="radio" name="PerguntaDesempate3" value ='log' id = "Pergunta3.2"><label for="Pergunta3.2" class = "Respostas">b) Coordenando a logística e garantindo a eficiência dos processos.</label><br><br>
                </div>
                <div class="botao">
                    <input type="submit" value="Proxima" class = submit>
                </div>
            </form>
        </div>
    </div>
</body>
</html>