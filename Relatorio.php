<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Relatorio.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sofia+Sans+Condensed:ital,wght@0,1..1000;1,1..1000&display=swap" rel="stylesheet">
    <title>Relatorio</title>
</head>
<body>
    <header>
        <img src="img/Group 6.png" alt="">
    </header>
    <div class="conteudo">
        <div class="container">
            <div class="resposta">
                <?php
                    session_start();
                    $Desempate = false;

                    if(empty($_SESSION['PerguntaDesempate1']) || empty($_SESSION['PerguntaDesempate2']) || empty($_SESSION['PerguntaDesempate3'])){
                        $Desempate = false;
                    } else if ($_SESSION['PerguntaDesempate1'] == 'ds' || $_SESSION['PerguntaDesempate2'] == 'ds' || $_SESSION['PerguntaDesempate3'] == 'ds') {
                        $_SESSION['ContadorDs']++;
                    } else if ($_SESSION['PerguntaDesempate1'] == 'log' || $_SESSION['PerguntaDesempate2'] == 'log' || $_SESSION['PerguntaDesempate3'] == 'log') {
                        $_SESSION['ContadorLog']++;
                    } else if($_SESSION['PerguntaDesempate1'] == 'ele' || $_SESSION['PerguntaDesempate2'] == 'ele' || $_SESSION['PerguntaDesempate3'] == 'ele') {
                        $_SESSION['ContadorEle']++;
                    } else if($_SESSION['PerguntaDesempate1'] == 'Mark' || $_SESSION['PerguntaDesempate2'] == 'Mark' || $_SESSION['PerguntaDesempate3'] == 'Mark') {
                        $_SESSION['ContadorMark']++;
                    } else if($_SESSION['PerguntaDesempate1'] == 'Rh' || $_SESSION['PerguntaDesempate2'] == 'Rh' || $_SESSION['PerguntaDesempate3'] == 'Rh'){
                        $_SESSION['ContadorRh']++;
                    } else if($_SESSION['PerguntaDesempate1'] == 'Turi' || $_SESSION['PerguntaDesempate2'] == 'Turi' || $_SESSION['PerguntaDesempate3'] == 'Turi'){
                        $_SESSION['ContadorTuri']++;
                    }

                    if ($_SESSION['EscolheuExatas'] == "Sim") {

                        if($_SESSION['ContadorDs'] > $_SESSION['ContadorLog'] && $_SESSION['ContadorDs'] > $_SESSION['ContadorEle']) {
                            echo("Seu curso é: Ds");
                        } else if ($_SESSION['ContadorLog'] > $_SESSION['ContadorEle'] && $_SESSION['ContadorLog'] > $_SESSION['ContadorDs']) {
                            echo("Seu curso é: Logistica");
                        } else if ($_SESSION['ContadorEle'] > $_SESSION['ContadorLog'] && $_SESSION['ContadorEle'] > $_SESSION['ContadorDs']) {
                            echo("Seu curso é: Eletrica");
                        }
                    } else if ($_SESSION['EscolheuHumanas'] == "Sim") {

                        if($_SESSION['ContadorMark'] > $_SESSION['ContadorRh'] && $_SESSION['ContadorMark'] > $_SESSION['ContadorTuri']) {
                            echo("Seu curso é: Marketing");
                        } else if ($_SESSION['ContadorRh'] > $_SESSION['ContadorMark'] && $_SESSION['ContadorRh'] > $_SESSION['ContadorTuri']) {
                            echo("Seu curso é: Rh");
                        } else if ($_SESSION['ContadorTuri'] > $_SESSION['ContadorMark'] && $_SESSION['ContadorTuri'] > $_SESSION['ContadorRh']) {
                            echo("Seu curso é: Turismo");
                        }
                    }

                    session_destroy();

                ?>
            </div>
            <button class = "botao">
                <a href="index.html" class="link">Inicio</a>
            </button>
        </div>
    </div>
</body>
</html>