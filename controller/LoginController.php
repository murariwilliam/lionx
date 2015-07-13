<?php
include_once "./model/Visitatore.php";
$username = $_POST['username'];
$password = $_POST['password'];
$message;
if (username && password && username != "" && password != "") {
    $visitatore = new visitatore();
    $visitatore->login($username, $password);
    if ($visitatore !=null) {
        session_start();
    }
    else {
        $message = "Utente non trovato";
    }
} else {
    $message = "Non ha inserito corretamente i dati";
}





