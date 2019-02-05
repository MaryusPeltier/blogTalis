<?php
session_start();
require "database.php";

$title=$_POST["title"];
$content=$_POST["content"];

$req = $db->prepare("INSERT INTO posts (title, content) VALUES (:title,:content)");
$req->execute(array(
    "title" => $title,
    "content" => $content
));
