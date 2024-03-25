<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="PerguntaCursosExatas.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sofia+Sans+Condensed:ital,wght@0,1..1000;1,1..1000&display=swap" rel="stylesheet">
    <title>Perguntas Exatas</title>
</head>
<body>
    <header>
        <img src="img/Group 6.png" alt="">
    </header>
    <div class="conteudo">
        <div class="formulario">
            <form action="ValidaCursoExatas.php" method="post">
                <div class="texto">
                    <label for="PerguntaCursosExatas1" class = "Pergunta">Quando pensa em sua carreira futura, você se imagina:</label><br><br>
                    <input type="radio" name="PerguntaCursosExatas1" value ='ds' id = "Pergunta1.1"><label for="Pergunta1.1" class = "Respostas">a) Criando e desenvolvendo novos softwares ou aplicativos.</label><br>
                    <input type="radio" name="PerguntaCursosExatas1" value ='log' id = "Pergunta1.2"><label for="Pergunta1.2" class = "Respostas">b) Organizando e otimizando processos de produção e distribuição.</label><br>
                    <input type="radio" name="PerguntaCursosExatas1" value ='ele' id = "Pergunta1.3"><label for="Pergunta1.3" class = "Respostas">c) Projetando e trabalhando com sistemas elétricos e eletrônicos.</label><br><br>

                    <label for="PerguntaCursosExatas2" class = "Pergunta">Ao abordar um problema complexo, você prefere lidar com:</label><br><br>
                    <input type="radio" name="PerguntaCursosExatas2" value ='ds' id = "Pergunta2.1" class = "Respostas">a) Códigos, algoritmos e sistemas computacionais.<label for="Pergunta2.1"></label><br>
                    <input type="radio" name="PerguntaCursosExatas2" value ='log' id = "Pergunta2.2" class = "Respostas">b) Fluxos de trabalho, cadeias de suprimentos e logística de produção.<label for="Pergunta2.2"></label><br>
                    <input type="radio" name="PerguntaCursosExatas2" value ='ele' id = "Pergunta2.3" class = "Respostas">c) Circuitos elétricos, dispositivos eletrônicos e sistemas de potência.<label for="Pergunta2.3"></label><br><br>

                    <label for="PerguntaCursosExatas3" class = "Pergunta">Quando pensa em tecnologia, o que mais te atrai:</label><br><br>
                    <input type="radio" name="PerguntaCursosExatas3" value ='ds' id = "Pergunta3.1"><label for="Pergunta3.1" class = "Respostas">a) Desenvolver soluções de software inovadoras.</label><br>
                    <input type="radio" name="PerguntaCursosExatas3" value ='log' id = "Pergunta3.2"><label for="Pergunta3.2" class = "Respostas">b) Melhorar a eficiência e a organização dos processos.</label><br>
                    <input type="radio" name="PerguntaCursosExatas3" value ='ele' id = "Pergunta3.3"><label for="Pergunta3.3" class = "Respostas">c) Trabalhar com a eletricidade e seus diversos usos.</label><br><br>

                    <label for="PerguntaCursosExatas4" class = "Pergunta">Em um projeto em equipe, qual papel você se sentiria mais à vontade desempenhando:</label><br><br>
                    <input type="radio" name="PerguntaCursosExatas4" value ='ds' id = "Pergunta4.1"><label for="Pergunta4.1" class = "Respostas">a) Programador, desenvolvendo o código principal do projeto.</label><br>
                    <input type="radio" name="PerguntaCursosExatas4" value ='log' id = "Pergunta4.2"><label for="Pergunta4.2" class = "Respostas">b) Coordenador, organizando e supervisionando a execução das tarefas.</label><br>
                    <input type="radio" name="PerguntaCursosExatas4" value ='ele' id = "Pergunta4.3"><label for="Pergunta4.3" class = "Respostas">c) Engenheiro, projetando e implementando sistemas elétricos.</label><br><br>
                </div>
                <div class="botao">
                    <input type="submit" value="Proxima" class = submit>
                </div>
            </form>
        </div>
    </div>
</body>
</html>