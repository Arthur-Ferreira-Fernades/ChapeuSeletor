<?php

    session_start();

    $_SESSION['PerguntaDesempate1'] = $_POST['PerguntaDesempate1'];
    $_SESSION['PerguntaDesempate2'] = $_POST['PerguntaDesempate2'];
    $_SESSION['PerguntaDesempate3'] = $_POST['PerguntaDesempate3'];

    if ($_SESSION['PerguntaDesempate1'] == 'Mark') {
        $_SESSION['ContadorMark']++;
    } else if ($_SESSION['PerguntaDesempate1'] == 'Rh') {
        $_SESSION['ContadorRh']++;
    } else if($_SESSION['PerguntaDesempate1'] == 'Turi') {
        $_SESSION['ContadorTuri']++;
    }

    if ($_SESSION['PerguntaDesempate2'] == 'Mark') {
        $_SESSION['ContadorMark']++;
    } else if ($_SESSION['PerguntaDesempate2'] == 'Rh') {
        $_SESSION['ContadorRh']++;
    } else if($_SESSION['PerguntaDesempate2'] == 'Turi') {
        $_SESSION['ContadorTuri']++;
    }

    if ($_SESSION['PerguntaDesempate3'] == 'Mark') {
        $_SESSION['ContadorMark']++;
    } else if ($_SESSION['PerguntaDesempate3'] == 'Rh') {
        $_SESSION['ContadorRh']++;
    } else if($_SESSION['PerguntaDesempate3'] == 'Turi') {
        $_SESSION['ContadorTuri']++;
    }

    header("location: Relatorio.php");