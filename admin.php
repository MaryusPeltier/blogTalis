<?php 

// var_dump($_GET);
// var_dump($_POST);

// echo "Bonjour ".$_GET["pseudo"];

// Si pseudo égale à admin et password égale à admin
    //Message Bonjour
// SInon redirection login.php

if($_POST["pseudo"] === "admin" && $_POST["password"] === "admin"){
    echo "Bonjour ".$_POST["pseudo"];
}else if($_POST["pseudo"] !== "admin"){
    header('location:login.php?message=Erreur de pseudo');
}else if($_POST["password"] !== "admin"){
    header('location:login.php?message=Erreur de password');
}
else{
    header('location:login.php');
}