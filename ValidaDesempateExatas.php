<?php
    session_start();

    $_SESSION['PerguntaDesempate1'] = $_POST['PerguntaDesempate1'];
    $_SESSION['PerguntaDesempate2'] = $_POST['PerguntaDesempate2'];
    $_SESSION['PerguntaDesempate3'] = $_POST['PerguntaDesempate3'];

    if ($_SESSION['PerguntaDesempate1'] == 'ds') {
        $_SESSION['ContadorDs']++;
    } else if ($_SESSION['PerguntaDesempate1'] == 'ele') {
        $_SESSION['ContadorEle']++;
    } else if($_SESSION['PerguntaDesempate1'] == 'log') {
        $_SESSION['ContadorLog']++;
    }

    if ($_SESSION['PerguntaDesempate2'] == 'ds') {
        $_SESSION['ContadorDs']++;
    } else if ($_SESSION['PerguntaDesempate2'] == 'ele') {
        $_SESSION['ContadorEle']++;
    } else if($_SESSION['PerguntaDesempate2'] == 'log') {
        $_SESSION['ContadorLog']++;
    }

    if ($_SESSION['PerguntaDesempate3'] == 'ds') {
        $_SESSION['ContadorDs']++;
    } else if ($_SESSION['PerguntaDesempate3'] == 'ele') {
        $_SESSION['ContadorEle']++;
    } else if($_SESSION['PerguntaDesempate3'] == 'log') {
        $_SESSION['ContadorLog']++;
    }

    header("location: Relatorio.php");

?>