<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php require "nav-bar.php"; ?>

    <form action="login_post.php" method="post">
        <input class="pseudo" type="text" style="border:2px solid gray; border-radius:5px; padding:6px; text-decoration:none; color:black;" placeholder="Pseudo" name="pseudo">
        <input class="password" type="password" style="border:2px solid gray; border-radius:5px; padding:6px; text-decoration:none; color:black;" placeholder="Mot de passe" name="password">
        <input type="submit" style="border:2px solid gray; border-radius:5px; padding:6px; text-decoration:none; background-color: white; color:gray;" value="Envoyer">
    </form>
    <?php 
        if(isset($_GET["message"])){
            echo $_GET["message"];
        }
    ?>
</body>
</html>