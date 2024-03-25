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
            <form action="ValidaDesempateHumanas.php" method="post">
                <div class="texto">
                    <label for="PerguntaDesempate1" class = "Pergunta">Ao pensar em sua futura carreira, você se imagina mais:</label><br><br>
                    <input type="radio" name="PerguntaDesempate1" value ='Rh' id = "Pergunta1.1"><label for="Pergunta1.1" class = "Respostas">a) Gerenciando e desenvolvendo equipes de trabalho.</label><br>
                    <input type="radio" name="PerguntaDesempate1" value ='Turi' id = "Pergunta1.2"><label for="Pergunta1.2" class = "Respostas">b) Planejando e organizando experiências turísticas e viagens.</label><br><br>
                    <label for="PerguntaDesempate2" class = "Pergunta">Quando enfrenta um desafio profissional, você prefere lidar com:</label><br><br>
                    <input type="radio" name="PerguntaDesempate2" value ='Rh' id = "Pergunta2.1"><label for="Pergunta2.1" class = "Respostas">a) Gestão de pessoas, resolução de conflitos e desenvolvimento de talentos.</label><br>
                    <input type="radio" name="PerguntaDesempate2" value ='Turi' id = "Pergunta2.2"><label for="Pergunta2.2" class = "Respostas">b) Planejamento de roteiros, organização de eventos e gestão de atividades turísticas.</label><br><br>
                    <label for="PerguntaDesempate3" class = "Pergunta">Ao considerar o aspecto mais atraente de um setor profissional, o que mais te intriga:</label><br><br>
                    <input type="radio" name="PerguntaDesempate3" value ='Rh' id = "Pergunta3.1"><label for="Pergunta3.1" class = "Respostas">a) Desenvolver programas de treinamento e desenvolvimento para funcionários.</label><br>
                    <input type="radio" name="PerguntaDesempate3" value ='Turi' id = "Pergunta3.2"><label for="Pergunta3.2" class = "Respostas">b) Explorar novos destinos e culturas, compartilhando essas experiências com outros.</label><br><br>
                </div>
                <div class="botao">
                    <input type="submit" value="Proxima" class = submit>
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>