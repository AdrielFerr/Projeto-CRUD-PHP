<?php
    session_start();
    unset($_SESSION["usuario"]);
    unset($_SESSION["nome"]);
    unset($_SESSION["nivel"]);
    session_destroy();
    header("Location: index.html");
    exit;
?>    