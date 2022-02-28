<?php

session_start();
if ($_SESSION['nome'] != "odair" or $_SESSION['senha'] != "12345"){
    header("location:lista.php"); exit;
}

?>