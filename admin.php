<?php 
require "header.php";
if(isset($_GET["message"])){
    echo $_GET["message"];
}
?>
    <h1>Admin</h1>

    <a href="add_post.php">Ajouter article</a>

    <?php
    $req = $db->query("SELECT id, title FROM posts");
    $req->execute();

    while($row = $req->fetch(PDO::FETCH_ASSOC)){
        echo "<h4>{$row["title"]}</h4>";
        echo "<a href='delet_post.php?id={$row["id"]}'>supprimer</a>";
    }

    ?>
</body>
</html>