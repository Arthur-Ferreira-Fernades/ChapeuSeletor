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
                    <label for="PerguntaDesempate1" class = "Pergunta">Ao pensar em sua carreira futura, você se imagina mais:</label><br><br>
                    <input type="radio" name="PerguntaDesempate1" value ='Mark' id = "Pergunta1.1"><label for="Pergunta1.1" class = "Respostas">a) Criando estratégias de marketing para promover produtos ou serviços.</label><br>
                    <input type="radio" name="PerguntaDesempate1" value ='Rh' id = "Pergunta1.2"><label for="Pergunta1.2" class = "Respostas">b) Gerenciando e desenvolvendo equipes de trabalho.</label><br><br>
                    <label for="PerguntaDesempate2" class = "Pergunta">Quando enfrenta um desafio profissional, você prefere lidar com:</label><br><br>
                    <input type="radio" name="PerguntaDesempate2" value ='Mark' id = "Pergunta2.1"><label for="Pergunta2.1" class = "Respostas">a) Análise de mercado, identificação de tendências e desenvolvimento de campanhas.</label><br>
                    <input type="radio" name="PerguntaDesempate2" value ='Rh' id = "Pergunta2.2"><label for="Pergunta2.2" class = "Respostas">b) Gestão de pessoas, resolução de conflitos e desenvolvimento de talentos.</label><br><br>
                    <label for="PerguntaDesempate3" class = "Pergunta">Ao considerar o aspecto mais atraente de um setor profissional, o que mais te intriga:</label><br><br>
                    <input type="radio" name="PerguntaDesempate3" value ='Mark' id = "Pergunta3.1"><label for="Pergunta3.1" class = "Respostas">a) Criar campanhas criativas para atrair clientes ou consumidores.</label><br>
                    <input type="radio" name="PerguntaDesempate3" value ='Rh' id = "Pergunta3.2"><label for="Pergunta3.2" class = "Respostas">b) Desenvolver programas de treinamento e desenvolvimento para funcionários.</label><br><br>
                </div>
                <div class="botao">
                    <input type="submit" value="Proxima" class = submit>
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>