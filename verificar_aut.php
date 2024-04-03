<?php

session_start();

if($_SESSION["autenticado"] != true){
    session_destroy();
    header("Location: ../tela_login.php");
    exit;
}