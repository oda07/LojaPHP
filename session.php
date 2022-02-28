<?php

session_start();
if ($_SESSION['nome'] == "" or $_SESSION['senha'] == ""){
    header("location:index.php");
    exit;
}

?>