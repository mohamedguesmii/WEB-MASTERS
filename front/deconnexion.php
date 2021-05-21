<?php

session_start();

unset($_SESSION["id"]);
unset($_SESSION["nom"]);
unset($_SESSION["email"]);
unset($_SESSION["telephone"]);
unset($_SESSION["adresse"]);
unset($_SESSION["date"]);


header("location:login.php");

?>
