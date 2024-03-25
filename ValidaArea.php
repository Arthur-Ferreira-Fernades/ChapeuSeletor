<?php
    session_start();

    $ContadorHumanas = 0;
    $ContadorExatas = 0;
    $_SESSION['EscolheuExatas'] = "Nao";
    $_SESSION['EscolheuHumanas'] = "Nao";
    $_SESSION['PerguntaArea1'] = $_POST['PerguntaArea1'];
    $_SESSION['PerguntaArea2'] = $_POST['PerguntaArea2'];
    $_SESSION['PerguntaArea3'] = $_POST['PerguntaArea3'];

    if($_SESSION['PerguntaArea1'] == 1) {
        $ContadorExatas++;
    } else {
        $ContadorHumanas++;
    }

    if($_SESSION['PerguntaArea2'] == 1) {
        $ContadorExatas++;
    } else {
        $ContadorHumanas++;
    }

    if($_SESSION['PerguntaArea3'] == 1) {
        $ContadorExatas++;
    } else {
        $ContadorHumanas++;
    }

    if ($ContadorExatas>$ContadorHumanas) {
        header("location: PerguntasCursosExatas.php");
        $_SESSION['EscolheuExatas'] = "Sim";
    } else {
        header("location: PerguntasCursosHumanas.php");
        $_SESSION['EscolheuHumanas'] = "Sim";
    }   


?>
