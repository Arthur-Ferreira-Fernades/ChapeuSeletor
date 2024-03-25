<?php
    session_start();

    $_SESSION['ContadorDs'] = 0;
    $_SESSION['ContadorLog'] = 0;
    $_SESSION['ContadorEle'] = 0;

    $_SESSION['PerguntaCursosExatas1'] = $_POST['PerguntaCursosExatas1'];
    $_SESSION['PerguntaCursosExatas2'] = $_POST['PerguntaCursosExatas2'];
    $_SESSION['PerguntaCursosExatas3'] = $_POST['PerguntaCursosExatas3'];
    $_SESSION['PerguntaCursosExatas4'] = $_POST['PerguntaCursosExatas4'];


    if($_SESSION['PerguntaCursosExatas1'] == 'ds') {
        $_SESSION['ContadorDs']++;
    } else if ($_SESSION['PerguntaCursosExatas1'] == 'log'){
        $_SESSION['ContadorLog']++;
    } else {
        $_SESSION['ContadorEle']++;
    }

    if($_SESSION['PerguntaCursosExatas2'] == 'ds') {
        $_SESSION['ContadorDs']++;
    } else if ($_SESSION['PerguntaCursosExatas2'] == 'log'){
        $_SESSION['ContadorLog']++;
    } else {
        $_SESSION['ContadorEle']++;
    }

    if($_SESSION['PerguntaCursosExatas3'] == 'ds') {
        $_SESSION['ContadorDs']++;
    } else if ($_SESSION['PerguntaCursosExatas3'] == 'log'){
        $_SESSION['ContadorLog']++;
    } else {
        $_SESSION['ContadorEle']++;
    }

    if($_SESSION['PerguntaCursosExatas4'] == 'ds') {
        $_SESSION['ContadorDs']++;
    } else if ($_SESSION['PerguntaCursosExatas4'] == 'log'){
        $_SESSION['ContadorLog']++;
    } else {
        $_SESSION['ContadorEle']++;
    }

    if ($_SESSION['ContadorDs'] == $_SESSION['ContadorLog'] && $_SESSION['ContadorDs'] > 1 && $_SESSION['ContadorLog'] > 1) {
        header("location: DesempataDsLog.php");
    } else if($_SESSION['ContadorDs'] == $_SESSION['ContadorEle'] && $_SESSION['ContadorDs'] > 1 && $_SESSION['ContadorEle'] > 1) {
        header("location: DesempataDsEle.php");
    } else if ($_SESSION['ContadorLog'] == $_SESSION['ContadorEle'] && $_SESSION['ContadorEle'] > 1 && $_SESSION['ContadorLog'] > 1) {
        header("location: DesempataLogEle.php");
    } else {
        header("location: Relatorio.php");
    }

?>
