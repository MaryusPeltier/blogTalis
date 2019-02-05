<?php 
require "database.php";

$req = $db->prepare('SELECT * FROM users WHERE pseudo = :pseudo AND password = :password');
$req->execute(array(
    "pseudo" => $_POST["pseudo"],
    "password" => $_POST["password"]
));
$result = $req->fetch();
if(!$result){
    header('location:login.php');
}else{
    session_start();
    $_SESSION["pseudo"] = $_POST["pseudo"];
    header('location:admin.php');
}


// // Si pseudo égale à admin et password égale à admin
// if($_POST["pseudo"] === "admin" && $_POST["password"] === "admin"){
//     session_start();
//     $_SESSION["pseudo"] = $_POST["pseudo"];
//     header('location:admin.php');
// }else if($_POST["pseudo"] !== "admin"){
//     header('location:login.php?message=Erreur de pseudo');
// }else if($_POST["password"] !== "admin"){
//     header('location:login.php?message=Erreur de password');
// }
// else{
//     header('location:login.php');
// }