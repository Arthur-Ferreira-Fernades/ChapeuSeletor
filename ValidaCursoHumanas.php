<?php
    session_start();

    $_SESSION['ContadorMark'] = 0;
    $_SESSION['ContadorRh'] = 0;
    $_SESSION['ContadorTuri'] = 0;

    $_SESSION['PerguntaCursosHumanas1'] = $_POST['PerguntaCursosHumanas1'];
    $_SESSION['PerguntaCursosHumanas2'] = $_POST['PerguntaCursosHumanas2'];
    $_SESSION['PerguntaCursosHumanas3'] = $_POST['PerguntaCursosHumanas3'];
    $_SESSION['PerguntaCursosHumanas4'] = $_POST['PerguntaCursosHumanas4'];


    if($_SESSION['PerguntaCursosHumanas1'] == 'Mark') {
        $_SESSION['ContadorMark']++;
    } else if ($_SESSION['PerguntaCursosHumanas1'] == 'Rh'){
        $_SESSION['ContadorRh']++;
    } else {
        $_SESSION['ContadorTuri']++;
    }

    if($_SESSION['PerguntaCursosHumanas2'] == 'Mark') {
        $_SESSION['ContadorMark']++;
    } else if ($_SESSION['PerguntaCursosHumanas2'] == 'Rh'){
        $_SESSION['ContadorRh']++;
    } else {
        $_SESSION['ContadorTuri']++;
    }

    if($_SESSION['PerguntaCursosHumanas3'] == 'Mark') {
        $_SESSION['ContadorMark']++;
    } else if ($_SESSION['PerguntaCursosHumanas3'] == 'Rh'){
        $_SESSION['ContadorRh']++;
    } else {
        $_SESSION['ContadorTuri']++;
    }

    if($_SESSION['PerguntaCursosHumanas4'] == 'Mark') {
        $_SESSION['ContadorMark']++;
    } else if ($_SESSION['PerguntaCursosHumanas4'] == 'Rh'){
        $_SESSION['ContadorRh']++;
    } else {
        $_SESSION['ContadorTuri']++;
    }

    if ($_SESSION['ContadorMark'] == $_SESSION['ContadorRh'] && $_SESSION['ContadorMark'] > 0 && $_SESSION['ContadorRh'] > 0) {
        header("location: DesempataMarkRh.php");
    } else if($_SESSION['ContadorMark'] == $_SESSION['ContadorTuri'] && $_SESSION['ContadorMark'] > 0 && $_SESSION['ContadorTuri'] > 0) {
        header("location: DesempataMarkTuri.php");
    } else if ($_SESSION['ContadorRh'] == $_SESSION['ContadorTuri'] && $_SESSION['ContadorTuri'] > 0 && $_SESSION['ContadorRh'] > 0) {
        header("location: DesempataRhTuri.php");
    } else {
        header("location: Relatorio.php");
    } 


?>
